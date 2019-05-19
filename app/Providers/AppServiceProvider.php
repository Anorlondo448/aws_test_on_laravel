<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CalculatePointService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CalculatePointService', CalculatePointService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
