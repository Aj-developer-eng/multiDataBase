<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\user;
use DB;
use Hash;
class apicontroller extends Controller
{
    public function Login_logic(Request $req){
     	// $validator = Validator::make($request->all(), [
      //       'email' => 'required|email|exists:agents',
      //       'password' => 'required|min:8|max:8'
      //   ]);

      //   if ($validator->fails()) {
      //       return response()->json($validator->errors(), 422);
      //   }


           $credentials=$req->only('email','password');
             if (Auth::guard('web')->attempt($credentials))
              {
              	if (Auth::user()->role == 'admin') {
              		$user = Auth::guard('web')->user();
               $token = $user->createToken('my-app-token')->plainTextToken;
        
              $response = [
                  'user' => $user,
                  'token' => $token
              ];
            //return redirect('profile_details');
              return $response;
              	}else{
              		dd('nanana kaka chuti kr');
              	}
             // return redirect('web');
               
             }else{
              dd('please re write your password correctly!');die;
             }
}

public function get_user(){
    	$usr=user::all();
    	//dd($usr);die;
    	$usrs=DB::connection('mysql2')->table("users")->get();
          return view('admin_page',compact('usr','usrs'));
    }
    //for user profile update

    public function profile_update(Request $request,$id){
    	 $user = user::find($id);
        //dd($user);die;
    //      $validator = Validator::make($request->all(), [
    //         'name' => 'required|min:1|max:15',
    //         'email' => 'required|email',
    //         'password' => 'required|min:8|max:8'
    //     ]);
    // if ($validator->fails()) {
    //         return response()->json($validator->errors(), 422);
    //     }
  
  $user->name=$request->name;
   $user->email=$request->email;
   $user->password=Hash::make($request->password);
  $user->save();
   return response()->json(["message"=>"updated successfully!"],200);

    }
    public function del_method($id){
    	  $del = user::find($id);
       // dd($del);die;
         $del->delete();
         return response(["message"=>"Deleted Successfully"]);
    }
}