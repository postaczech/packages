<?php

namespace Friede\Packages;

use Illuminate\Support\ServiceProvider;

class DateFormaterProvider extends ServiceProvider
{

	protected $defer = true;

    public function boot()
    {

    }

    public function register()
    {
	    $this->app->singleton('dateformater', function ($app) {

		    return new DateFormater($app);
	    });

    }

	public function provides()
	{
		return [DateFormater::class];
	}

}
