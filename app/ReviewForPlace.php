<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewForPlace extends Model
{
	protected $guarded = [];
	
	public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function places()
    {
    	return $this->belongsTo(Place::class);
    }
}
