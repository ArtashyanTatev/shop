<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }


        config([
            'laravellocalization.supportedLocales' => [
                'ru' => ['name' => 'Russian','script' => 'Cyrl', 'native' => 'русский', 'regional' => 'ru_RU'],
                'hy'  => ['name' => 'Armenian','script' => 'Armn', 'native' => 'Հայերեն', 'regional' => 'hy_AM'],
                'en'  => array( 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }
}
