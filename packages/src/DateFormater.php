<?php

namespace Friede\Packages;

use Carbon\Carbon;

class DateFormater extends Carbon {

	public static function dmy( $date ){

		return Carbon::parse($date)->format('d.m.Y');

	}

}