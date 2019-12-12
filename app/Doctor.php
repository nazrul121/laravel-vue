<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = ['user_d','reg','photo','phone','education','other_details','is_active','add_by'];




    //make relationship
    function user(){
    	return $this->belongsTo(User::class);
    }

    function docTypes(){
    	return $this->belongsTomany(DocType::class);
    }

   	function chamber(){
   		return $this->hasMany(Chamber::class);
   	}
}
