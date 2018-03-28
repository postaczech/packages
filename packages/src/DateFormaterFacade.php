<?php

namespace Friede\Packages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Friede\Packages\DateFormater
 */
class DateFormaterFacade extends Facade
{

	/**
	 * Get the registered name of the component for facade
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{

		return 'DateFormater';
	}
}
