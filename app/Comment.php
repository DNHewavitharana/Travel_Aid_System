<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    Protected $fillable = ['body',
							'url',
							'user_id',
							'commentable_id',
							'commentable_type',
						];

	public function commentable(){
		return $this->morphTo();
	}
	public function user(){
		return $this->hasone('\App\User','id','user_id');

	}

}

