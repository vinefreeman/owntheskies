<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    //
    protected $fillable = [
		'name', 'code', 'slug', 'logo_link', 'photo_link', 'descrip', 'update_by', 'created_by'
	];
}
