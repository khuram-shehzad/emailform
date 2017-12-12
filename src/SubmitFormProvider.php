<?php

namespace vendorform\laravelform;

use Illuminate\Support\ServiceProvider;

class SubmitFormProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'\routes.php';
        $this->loadViewsFrom(__DIR__.'/views', 'laravelform');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vendorform\Laravelform\SubmitFormController');
    }
}
