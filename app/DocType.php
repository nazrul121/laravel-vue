<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    function doctors(){
    	return $this->belongsTomany(Doctors::class);
    }
}
