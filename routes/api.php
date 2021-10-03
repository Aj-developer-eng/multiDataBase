<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login_method',[apicontroller::class,'Login_logic']);

Route::group(['middleware' => 'auth:sanctum'], function(){ 
///for login from database1->only admin
Route::get('all_user',[apicontroller::class,'get_user']);
Route::put('my_profile/{id}',[apicontroller::class,'profile_update']);

Route::delete('delete/{id}',[apicontroller::class,'del_method']);

});


Route::get('city',[HTTPcontroller::class,'city_list']);