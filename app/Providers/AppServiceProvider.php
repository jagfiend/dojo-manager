<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Recommended settings from https://planetscale.com/blog/laravels-safety-mechanisms
        Model::unguard();
        Model::preventAccessingMissingAttributes();
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
