<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaneShedule extends Model
{
    Protected $fillable = ['plane_id',
							'day',
							'stops',
							'beginning_airport',
							'destination_airport',
							'takeoff_time1',
							'landing_time1',
							'takeoff_time2',
							'landing_time2',
						];

	public function planes(){
        return $this->belongsToMany('App\Plane'); 
    }

}
