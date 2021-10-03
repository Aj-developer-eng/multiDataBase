<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use Auth;
use App\Models\user2;
use DB;
use Mail;
class procontroller extends Controller
{
    public function add_pro_form(){
    	return view('adding');
    }
    public function add_pro_method(Request $req){

    		$req->validate([
     'proname' => 'required',
     'discription' => 'required',
     'price' => 'required',
 ]);
  	$pro= new product;

  	$pro->proname= $req->proname;
  	$pro->discription=$req->discription;
  	$pro->price=$req->price;
  	$pro->quantity=$req->quantity;
  	$pro->image=$req->file('image')->store('proimage');
  	$pro->save();
  	return back()->with('success','Product is created successfully!');
  }

  public function shop_view(){
  	return view('shop');
  }
   public function shop_item_view(){
   	$pro = product::all();
   	//dd($pro);die;
   	return view('shop',compact('pro'));
   }


   public function buy_form_view($id){
   	$r=product::find($id);
   	return view('buy_form',compact('r'));
   }

 public function buy_form_method(Request $req){
   	$req->validate([
     'name' => 'required',
     'email' => 'required',
     'address' => 'required',
          'phone' => 'required',
               'note' => 'required',
 ]);
  	$customer= new order;
$customer->current_uid= Auth::guard('webz')->user()->id;
    $customer->product_id=$req->product_id;
  	$customer->name= $req->name;
  	$customer->email=$req->email;
  	$customer->address=$req->address;
  	$customer->phone=$req->phone;
  	$customer->note=$req->note;
  	$customer->save();
  	return back()->with('success','We have recived your information successfully!');
   }
    public function order_queue(){
   	$r=order::all();
   	
 // dd($r);die;
   	return view('order_collection',compact('r'));
   }
   public function get_order_uid($id){
    $t = DB::connection('mysql2')->table("products")->get()->where('id',$id);
   // dd($t);die;
    return view('customer_order',compact('t'));
   }


   public function changeorderStatususer(Request $req){
    

     $user = order::find($req->user_id);
        $user->status = $req->status;
        $user->save();
        $email = DB::connection('mysql2')->table("users")->get()->where('id',"=",$req->user_id);
     Mail::send('user.emails.MyTestMail', function($message) use($req){
               $message->to('awaabjaved393@gmail.com');
               $message->subject('order notify');
           });
        
   }
public function notifymail(){
  $l= order::find();
  //dd($l);die;
}
}
