<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\DocTypes;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctors_of_category($category)
    {
        //
        $doctors = DB::table('doctor_doctype')->select('users.id as user_id','doctors.id as doctor_id','users.sex','users.name','doctors.reg','doctors.education','doctypes.title')
            ->leftJoin('doctors', 'doctors.user_id', '=', 'doctor_doctype.doctor_id')
            // ->leftJoin('chambers','chambers.doctor_id','=','doctors.id')
            ->leftJoin('users', 'users.id', '=', 'doctors.user_id')
            ->leftJoin('doctypes', 'doctypes.id', '=', 'doctor_doctype.docType_id')
            ->where('docType_id','=',$category)->where('doctors.is_active','=',1)
            // ->groupBy()
            ->paginate(10);
      
        return $doctors;
    }

    function single_doctor($id){
        $doctor = DB::table('doctors')->select('*')
            ->leftJoin('users', 'users.id', '=', 'doctors.user_id')
            ->where('doctors.id','=',$id)->where('doctors.is_active','=',1)
            ->get();
      
        return $doctor;
    }

    function doctor_chambers_info($id){
        $chambers = DB::table('chambers')->select('*')
        ->where('doctor_id','=',$id)
        ->get();
      
        return $chambers;
    }

    public function doctor_chamber_number($doctor_id){
        return $doctor_id;
    }

    public function doc_types()
    {
        // if(request()->ajax()){
            return DB::table('docTypes')->select('id','title','title_bn')->get();
        // }
    }

    public function doctors() {
        // if(request()->ajax()){
            return DB::table('doctors')->select('*')->where('is_active','=',1)->get();
        // }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
