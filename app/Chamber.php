<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamber extends Model
{
   protected $fillable = ['doctor_id','division_id','district_id','phone','email','address','v_hours','fee_first','fee_second','other_details','is_active'];

   	//make relationship
   	function doctors(){
   		return $this->belongsTo(Doctor::class);
   	}
}
