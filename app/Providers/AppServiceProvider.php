<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

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
        // penambahan rupiah
        Str::macro('currency', function ( $expression ) {
            return sprintf('Rp %s' , number_format($expression));
        });

        if(env("APP_ENV") !== 'local') {
            URL::forceScheme('https');
        }
    }
}
