<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    Protected $fillable = ['name',
						];

	
	public function users(){
        return $this->hasMany('App\User'); 
    }

}
