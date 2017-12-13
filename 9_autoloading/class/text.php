<?php

class Text{

	private static $suffix = " €"; 

	const SUFFIX = " $";

	public static function withZero($chiffre) {
		if ($chiffre < 10) {
			return '0'. $chiffre . self::$suffix ;
		} else {
			return $chiffre  . self::SUFFIX;
		}
	}


}