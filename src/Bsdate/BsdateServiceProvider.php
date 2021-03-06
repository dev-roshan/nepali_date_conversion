<?php

namespace devroshan\Bsdate;

use Illuminate\Support\ServiceProvider;

class BsdateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('devroshan\Bsdate\BsdateController');
        $this->app->bind('bsdate', function () {
            return new \devroshan\Bsdate\BsdateController();
        });
    }
}
