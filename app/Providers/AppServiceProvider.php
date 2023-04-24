<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        /**
         * @see https://planetscale.com/blog/laravels-safety-mechanisms Recommended settings
         */
        Model::unguard();
        Model::preventAccessingMissingAttributes();
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
