<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\procontroller;
use App\Http\Controllers\HTTPcontroller;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\importcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);
Route::get('/', function () {
    return view('welcome');
});
//for landing page
Route::get('landing',[logincontroller::class,'land_view']);
//for login
Route::get('login',[logincontroller::class,'Login_form']);
Route::post('login_method',[logincontroller::class,'Login_logic']);
//for logout
Route::get('logout',[logincontroller::class,'logout_logic']);
//for admin
Route::get('admin',[logincontroller::class,'view']);
//fetching user from both DB
Route::get('all_user',[logincontroller::class,'get_user']);
//for booking show for single user
Route::get('booking_case/{id}',[logincontroller::class,'single_booking_logic']);
Route::get('bookings_case/{id}',[logincontroller::class,'single_booking']);
//for user my booking
Route::get('my_booking',[logincontroller::class,'my_book']);

//for user activity
Route::get('user_login',[usercontroller::class,'user_login_form']);
Route::post('user_login_method',[usercontroller::class,'user_login_logic']);
Route::get('user_logout',[usercontroller::class,'user_logout_logic']);
//for user from db2 my booking
Route::get('my_order_booking',[usercontroller::class,'my_order']);
//for forget password
Route::get('forget',[usercontroller::class,'forget_password_form']);
Route::post('forget_method',[usercontroller::class,'submit_forget_password']);
///reset button from mail
Route::get('reset/{token}',[usercontroller::class,'reset_password_form']);
Route::post('reset_submit',[usercontroller::class,'reset_password_method']);
//for all users to admin 
Route::get('user_portal',[logincontroller::class,'view_all_user']);
Route::get('changeStatus', [logincontroller::class,'changeStatususer']);
//for adding product by admin
Route::get('add',[procontroller::class,'add_pro_form']);
Route::post('add_method',[procontroller::class,'add_pro_method']);
//for view shop for user
Route::get('shop',[procontroller::class,'shop_view']);
Route::get('shop',[procontroller::class,'shop_item_view']);
//to view buy form
Route::get('buy_form/{id}',[procontroller::class,'buy_form_view']);
Route::post('form_method1',[procontroller::class,'buy_form_method']);
//for order in oueue
Route::get('order',[procontroller::class,'order_queue']);
Route::get('data/{id}',[procontroller::class,'get_order_uid']);

Route::get('changeorderStatus', [procontroller::class,'changeorderStatususer']);
////countries//////
Route::get('country',[HTTPcontroller::class,'country_list']);
/////cities///////
 Route::get('city',[HTTPcontroller::class,'city_list']);
// /////
 ///////////////////Route::get('hotels_mecca',[HTTPcontroller::class,'hotel_mecca_medina_list']);
// Route::get('hotels_madina',[HTTPcontroller::class,'hotel_madina_list']);

// Route::get('hotel_makkah',[HTTPcontroller::class,'hotel_makkah']);
// Route::get('hotel_makkah_pic',[HTTPcontroller::class,'hotel_makkah_pics']);
// Route::get('hotel_makkah_dis',[HTTPcontroller::class,'hotel_makkah_discrip']);
// Route::get('hotel_makkah_address',[HTTPcontroller::class,'hotel_makkah_add']);
// Route::get('hotel_makkah_info',[HTTPcontroller::class,'hotel_makkah_full']);

 Route::get('find_city', [HTTPcontroller::class,'findding_cities']);
// //hotel list according city
Route::get('city_hotel/{id}', [HTTPcontroller::class,'findding_hotels']);
 Route::get('hotel/{id}', [HTTPcontroller::class,'findding_hotels_info']);
  Route::get('hotel_room/{id}', [HTTPcontroller::class,'findding_hotels_room']);
Route::get('facility/{id}', [HTTPcontroller::class,'findding_facility_info']);

// //import
// Route::view('import1','excle');
// Route::post('import',[importcontroller::class,'index']);
