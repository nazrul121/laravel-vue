<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class AreaController extends Controller
{
    public function divisions()
    {
       	if(request()->ajax()){
        	return DB::table('divisions')->select('id','name','bn_name')->get();
    	}
    }

    public function districts()
    {	
    	if(request()->ajax()){
        	return DB::table('districts')->select('id','div_id','name','bn_name')->get();
    	}
    }


}
