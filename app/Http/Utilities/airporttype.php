<?php
namespace App\Http\Utilities;
class Airporttype
{
	protected static $types = [
		"Commercial" => "Commercial",
		"Military" => "Military",
		"Galactic" => "Galactic",
		"Private" => "Private",
	];
	public static function all()
	{
		return static::$types;
	}
}