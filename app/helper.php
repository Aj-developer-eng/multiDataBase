<?php
use App\Models\order;
use App\Models\product;
//use DB;

function get(){
	$r = order::all()->pro_id;
//print_r($find);die;
return $r;
}



?>
