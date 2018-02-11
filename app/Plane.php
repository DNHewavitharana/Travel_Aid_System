<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    Protected $fillable = ['plane_id',
							'plane_capacity',
							'takeoff_airport',
							'middle_stop_airport',
							'landing_airport',
							'ticket_price',
						];
	public function planeShedules(){
        return $this->hasMany('App\PlaneShedule'); 
    }

    public function userPlaneReservations(){
        return $this->hasMany('App\UserPlaneReservation'); 
    }

    public function users(){
    	return $this->hasMany('App\User');
    }

    public function comments(){
        return $this->morphMany('App\Comment','commentable'); 
    }

}
