<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Country extends Model
{
    public function path()
    {
    	return '/country/' . $this->id;
    }

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function getShortDescriptionAttribute()
    { 
        return Str::limit($this->description, 50, '...');
    }
}
