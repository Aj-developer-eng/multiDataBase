<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\user;
use App\Models\user2;
use DB;
class logincontroller extends Controller
{
	public function land_view(){
    	
           return view('landing');
         
    }


	 public function view(){
    	
           
         return view('admin_page');
    }


	 public function Login_form(){
    	
           return view('login');
         
    }
     public function Login_logic(Request $req){
     	$credentials=$req->only('email','password');
    	if (Auth::guard('web')->attempt($credentials)) {
          	if (Auth::user()->role == 'admin') {
          		return redirect('landing')->with('success','you are logged in successfully!');
          	}else{
          		return redirect('landing');
          	}
           
          }else{
           echo "OOppss something went wrong!";
          }
    }
     public function logout_logic(){
    	
           Auth::logout();
         return redirect('login');
    }

     public function get_user(){
    	$usr=user::all();
    	//dd($usr);die;
    	$usrs=DB::connection('mysql2')->table("users")->get();
          return view('admin_page',compact('usr','usrs'));
    }

    public function single_booking_logic($id){
    	$usrbooking=user::find($id)->get_booking;
    	//dd($usrbooking);die;
    	//$usrsbookings=DB::connection('mysql2')->table("bookings")->get()->where('user_id',$id);
    	//dd($usrsbookings);die;
          return view('bcase',compact('usrbooking'));
    }

 public function single_booking($id){
    	
    	$usrsbookings=DB::connection('mysql2')->table("bookings")->get()->where('user_id',$id);
    	//dd($usrsbookings);die;
         return view('bcase2',compact('usrsbookings'));
    }

    public function my_book(){
 $id = Auth::user()->id;
 //dd($id);die;
 $my_book = user::find($id)->get_booking;
    	//dd($my_book);die;
 return view('authbook',compact('my_book'));
    	
    }

    public function view_all_user(){

      $users=DB::connection('mysql2')->table("users")->get();
     // dd($usrs);die;
           
         return view('alluser',compact('users'));
    }
    public function changeStatususer(Request $request){
       $user = User2::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'User status change successfully.']);
    }
    
}
