<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User2;
use DB;
use Auth;
use Str;
use Carbon\Carbon;
use Mail;
use Hash;
class usercontroller extends Controller
{
	public function my_order(){
		$t = Auth::guard('webz')->user()->id;
       // dd($t);die;
		$my = DB::connection('mysql2')->table("bookings")->get()->where('user_id',$t);
		//dd($my);die;
    	return view('user.my_order_booking',compact('my'));
    }
    public function user_login_form(){
    	return view('user.user_login_form');
    }

     public function user_login_logic(Request $req){

             $credentials=$req->only('email','password');
              if (Auth::guard('webz')->attempt($credentials)) {
                if (Auth::guard('webz')->user()->status == 1) {
                  return redirect('my_order_booking');
                }else{
                  return response()->json(['code_status'=>200,'message'=>'your not been able to get in!']);
                }
             
             }else{
            	
             	dd('plz check your credentials');die;
                   }
            //  if (Auth::attempt($credentials)) {
            //     return redirect('my_order_booking');
            // }else{
                
            //     dd('hhhhhhh');die;
            //       }


     	}

     	  public function user_logout_logic(){
            
          Auth::guard('web')->logout();
          return redirect('user_login');
     	}


      public function forget_password_form(){
      return view('user.forgot');
    }
    public function submit_forget_password(Request $request){
     // $request->validate([
     //          'email' => 'required|email|exists:users',
     //      ]);
  
          $token = Str::random(64);
  
          DB::connection('mysql2')->table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
          $details = [
        'title' => 'Mail from Aj shop online',
        'body' => 'Your order has been placed',
        
    ];
  
// \Mail::to($request->email,['token' => $token],function($message) use($request){
// $message->to($request->email);
// $message->subject('Reset Password');
// })->send(new \App\Mail\MyTestMail($token));
   
//     dd($t);



           Mail::send('user.emails.MyTestMail', ['token' => $token], function($message) use($request){
               $message->to($request->email);
               $message->subject('Reset Password');
           });
  
        return back()->with('success', 'We have e-mailed your password reset link!'); 
    

    }
    public function reset_password_form($token){
      return view('user.emails.reset', ['token' => $token]);
    }
    public function reset_password_method(Request $request){
      $updatePassword = DB::connection('mysql2')->table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = DB::connection('mysql2')->table('users')->where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::connection('mysql2')->table('password_resets')->where(['email'=> $request->email])->delete();
  
          return redirect('user_login')->with('message', 'Your password has been changed!');
      }
    }

