<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_sliders()
    {
       
        // if(request()->ajax()){
            return DB::table('sliders')->select('feature_photo','title','discription')
            ->where('type','=','home')->where('active','=','1')->get();
        // }

    }

    public function hospital_categories()
    {
        // if(request()->ajax()){
            return DB::table('hosTypes')->select('id','title','title_bn')->get();
        // }

    }

    public function volunteers()
    {
        // if(request()->ajax()){
            return DB::table('volunteers')->select('*')->get();
        // }

    }
}
