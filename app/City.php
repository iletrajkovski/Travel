<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
	public function path()
    {
    	return '/city/' . $this->id;
    }

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function places()
    {
    	return $this->hasMany(Place::class);
    }

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 70, '...');
    }

    public function getSlugAttribute($slug)
    {
        $slug = Str::slug($this->name, '-');
        return $slug;
    }
}
