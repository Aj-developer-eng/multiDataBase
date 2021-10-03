<?php

namespace App\Http\Controllers;
use App\Models\mecca;
use App\Models\madina;
use App\Models\country;
use App\Models\city;
use App\Models\roomtype;
use App\Models\facility;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HTTPcontroller extends Controller
{
 
  public function country_list(){
    $response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=2');    
    $xml = simplexml_load_string($response->body());
   $display = json_encode($xml);
   $display1 = json_decode($display, true);
   //dd($display1);
//for city///////////////////////////////////////////////////////
  foreach($display1['countries']['country'] as $o){
    $t = new country;
     $t->country_id = $o['country_id'];
     $t->continent_id = $o['continent_id'];
    
     $t->country_name = $o['country_name'];
     $t->country_translated = $o['country_translated'];
     $t->active_hotels = $o['active_hotels'];
     $t->country_iso = $o['country_iso'];
     $t->country_iso2 = $o['country_iso2'];
      $t->longitude = $o['longitude'];
       $t->latitude = $o['latitude'];
       
     $t->save();
  }   
   // print_r($t);
  


}
    public function city_list(){
     $response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=3&ocountry_id=74');    
     $xml = simplexml_load_string($response->body());
    $display = json_encode($xml);
    $display1 = json_decode($display, true);
    // dd($display1);
 //for city///////////////////////////////////////////////////////
   foreach($display1['cities']['city'] as $o){
     $t = new city;
      $t->city_id = $o['city_id'];
      $t->country_id = $o['country_id'];
    
      $t->city_name = $o['city_name'];
      $t->city_translated = $o['city_translated'];
      $t->active_hotels = $o['active_hotels'];
      $t->longitude = $o['longitude'];
      $t->latitude = $o['latitude'];
       $t->no_area = $o['no_area'];
       
      $t->save();
   }  
   } 
//    // print_r($t);
//   }

    public function hotel_mecca_medina_list(){

  

   	$response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=5&mcity_id=78591');    
   	$xml = simplexml_load_string($response->body());
    $display = json_encode($xml);
    $display1 = json_decode($display, true);
    //dd($display1);
 //for hotel mecca///////////////////////////////////////////////////////
   foreach($display1['hotels']['hotel'] as $o){
     $t = new mecca;
      $t->hotel_id = $o['hotel_id'];
      $t->hotel_name = $o['hotel_name'];
      $t->translated_name = $o['translated_name'];
      $t->star_rating = $o['star_rating'];
      $t->continent_id = $o['continent_id'];
      $t->country_id = $o['country_id'];
      $t->city_id = $o['city_id'];
      $t->area_id = $o['area_id'];
       $t->longitude = $o['longitude'];
        $t->latitude = $o['latitude'];
         $t->hotel_url = $o['hotel_url'];
          $t->rating_average = $o['rating_average'];
      $t->save();

   }   
    // print_r($t);
   }
 


//    
//   }
  public function findding_cities(){
  $item = 'me';
    $city = DB::table('cities')->where('city_name','LIKE','%'.$item.'%')->get()->slice(2);
   // dd($city);
    return view ('city',compact('city'))->with('no', 1);

 }


  public function findding_hotels($id){
   $city=DB::table('meccas')->where('city_id',$id)->get();
   //dd($city);
     
    //dd($city);
    return view ('mecca',compact('city'))->with('no', 1);
}
 
 public function findding_hotels_info($id){
 //dd($id);
   // $hotel_ids = DB::table('meccas')->where('hotel_id',$id)->get();
  $id = DB::table('meccas')->where('hotel_id',$id)->get();
   // echo '<pre>';
    //dd($id);
    
   //foreach ($hotel_ids as $key => $value) {
     // echo $value->hotel_id;
    // $response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=6&mhotel_id='.$id);
    // $xml = simplexml_load_string($response->body());
    // $display = json_encode($xml);
    // $dis = json_decode($display, true);
    // //dd($dis);
    // $display1=$dis['roomtypes']['roomtype'];
    //dd($display1);
   return view('hotelfull',compact('id'));
  //dd($display1);
  // print_r($display1);
  // die;
   //$o=$display1;
  // print_r($o);die;
   //dd($o);
//     if(!empty($display1)){
//       foreach($display1['roomtypes'] as $o){
//       //dd($o);
//   $t = new roomtype;

//       $t->hotel_id = $o['hotel_id'];
//         $t->hotel_room_type_id = $o['hotel_room_type_id'];
//         $t->standard_caption = $o['standard_caption'];
//         $t->standard_caption_translated = $o['standard_caption_translated'];
//         $t->max_occupancy_per_room = $o['max_occupancy_per_room'];
//         $t->no_of_room = $o['no_of_room'];
//         $t->size_of_room = $o['size_of_room'];
//         $t->room_size_incl_terrace = $o['room_size_incl_terrace'];
      
//           $t->max_extrabeds = $o['max_extrabeds'];
//            $t->max_infant_in_room = $o['max_infant_in_room'];
//             $t->hotel_room_type_picture = $o['hotel_room_type_picture'];
//             $t->bed_type = $o['bed_type'];

//             $t->hotel_master_room_type_id = $o['hotel_master_room_type_id'];
//             $t->shared_bathroom = $o['shared_bathroom'];
//             $t->save();  
//             return redirect()->back();
 

//     }
//   }else{
// echo'empty';
//     }
 
 
}


public function findding_hotels_room($id){
 
 $hotels = DB::table('roomtypes')->where('hotel_id',$id)->get();


 //dd($hotels);
    // $response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=6&mhotel_id='.$id);
    // $xml = simplexml_load_string($response->body());
    // $display = json_encode($xml);
    // $display1 = json_decode($display, true);
// echo'<pre>';   
// print_r($display1);
// die();
//print_r($display1);die;
  return view('rooms',compact('hotels'));
//   foreach($display1['roomtypes']['roomtype'] as  $o){
//     //print_r($display1['roomtypes']['roomtype']);die();
//           $t = new roomtype;
//             //dd($t);
//         $t->hotel_id = $o['hotel_id'];
//         $t->hotel_room_type_id = $o['hotel_room_type_id'];
//         $t->standard_caption = $o['standard_caption'];
//         $t->standard_caption_translated = $o['standard_caption_translated'];
//         $t->max_occupancy_per_room = $o['max_occupancy_per_room'];
//         $t->no_of_room = $o['no_of_room'];
//         $t->size_of_room = $o['size_of_room'];
//         $t->room_size_incl_terrace = $o['room_size_incl_terrace'];
      
//           $t->max_extrabeds = $o['max_extrabeds'];
//            $t->max_infant_in_room = $o['max_infant_in_room'];
//             $t->hotel_room_type_picture = $o['hotel_room_type_picture'];
//             $t->bed_type = json_encode($o['bed_type']);

//             $t->hotel_master_room_type_id = $o['hotel_master_room_type_id'];
//             $t->shared_bathroom = $o['shared_bathroom'];
// // print_r($t);die;
//             $t->save();     
//          }
//          return back()->with('success','Iformation is created successfully!');     
}





 public function findding_facility_info($id){
  $dis = DB::table('facilities')->where('hotel_id',$id)->get();
  // echo $dis;die();

    // $response = Http::get('http://affiliatefeed.agoda.com/datafeeds/feed/getfeed?apikey=59e095c9-82fc-4f24-8a7a-ae2e41bbfe5c&feed_id=9&mhotel_id='.$id);
    // $xml = simplexml_load_string($response->body());
    
    // print_r($dis);
  //echo '<pre>';
  return $dis;
//$dis1 = json_decode($dis, true);

   
  //dd($dis1);
       //print_r($dis);
   //echo "ddd";

// return $dis1;
//return view('facility',compact('dis'));
//////////////////////////////////////////to store data from API into database////////////////////////////////////////
  //  foreach($diss['facilities']['facility'] as  $o){
   
  //          $t = new facility;
            
  //        $t->hotel_id = $o['hotel_id'];
  //        $t->property_group_description = $o['property_group_description'];
  //        $t->property_id = $o['property_id'];
  //        $t->property_name = json_encode($o['property_name']);
  //        $t->property_translated_name = json_encode($o['property_translated_name']);
         
  // //print_r($t);die;
  //            $t->save();     
  //         }
  //         return back()->with('success','Iformation is created successfully!'); 
 }

}