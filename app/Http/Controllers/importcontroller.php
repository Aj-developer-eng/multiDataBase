<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class importcontroller extends Controller
{ 
	function index(Request $request){
	//echo "file here";
		$file=$request->file;
		
		 Excel::import(new UsersImport, $file);
		echo "inserted";
	
	}
 }
