<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    //

    public $table = 'aircraft';
     protected $fillable = [
		'name', 'icao', 'slug', 'manufacturer', 'type', 'speed', 'ceiling',  'range', 'photolink', 'created_by', 'update_by'
	];
}

/*
* Types from http://www.greatcirclemapper.net/en/aircraft-type/a300.html
Name
Manufacturer	 
Type
ICAO
Speed
Ceiling
Range
*/	 