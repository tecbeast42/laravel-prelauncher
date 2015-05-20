<?php namespace TecBeast\PreLaunch;

use Illuminate\Support\ServiceProvider;
use App;

class PreLaunchServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->mergeConfigFrom(	__DIR__.'/config/prelaunch.php', 'prelaunch');
		App::register('Illuminate\Html\HtmlServiceProvider');	
	}

	public function boot() 
	{

		$this->loadViewsFrom(__DIR__.'/views', 'prelaunch');
		$this->publishes([
        	__DIR__.'/views' => base_path('resources/views/vendor/prelaunch'),
        	realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
        	__DIR__.'/config/prelaunch.php' => config_path('prelaunch.php'),
    	]);
	}

}