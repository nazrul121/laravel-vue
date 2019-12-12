<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['title'];


    function user(){
    	return $this->belongsTo(User::class);
    }
}
