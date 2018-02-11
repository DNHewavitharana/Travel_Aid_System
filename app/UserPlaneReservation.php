<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlaneReservation extends Model
{
    Protected $fillable = ['plane_id',
							'user_id',
							'shedule_id',
							'no_infance',
							'no_adult',
							'no_child',
							'beginning_airport',
							'destination_airport',
							'total_amount',
						];
	public function user(){
        return $this->belongsTo('App\User'); 
    }
	public function plane(){
        return $this->belongsToMany('App\User'); 
    }
}
