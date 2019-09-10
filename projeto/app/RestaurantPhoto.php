<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPhoto extends Model
{

	protected $fillable = [
		'photo'
	];

    public function restaurant()
    {
    	return $this->belongsTo(Restaurant::class);
    }
}
