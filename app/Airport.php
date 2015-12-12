<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Airport extends Eloquent{

	/**
	* Fillable for form on edit airport
	* @var array
	**/

	protected $fillable = [
		'title', 'code', 'slug', 'imglink', 'description'
	];

}