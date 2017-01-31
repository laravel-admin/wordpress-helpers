<?php

namespace LaravelAdmin\HeadlessWordpress;

use Illuminate\Support\ServiceProvider;

class HeadlessWordpressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			  __DIR__.'/../public/themes' => public_path(),
		], 'public');

		$this->publishes([
			  __DIR__.'/../public/wp-config.php' => public_path(),
		], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
