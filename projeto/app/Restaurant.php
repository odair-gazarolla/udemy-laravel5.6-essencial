<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Restaurant extends Model
{
    protected $fillable = [
    	'name', 'address', 'description'
    ];

    public function menus()
    {
    	return $this->hasMany(Menu::class);
    }

    public function owner()
    {
    	return $this->belongsTo(User::class);
    }
}
