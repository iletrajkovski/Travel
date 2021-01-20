<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	protected $guarded = [];

	public function placePath()
    {
    	return '/place/' . $this->id;
    }

    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function reviewForPlace()
    {
    	return $this->hasMany(ReviewForPlace::class);
    }

    public function addReview($reviewForPlace)
    {
    	$this->reviewForPlace()->create($reviewForPlace);
    }

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 25, '...');
    }
}
