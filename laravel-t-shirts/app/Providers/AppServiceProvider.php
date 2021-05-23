<?php

namespace App\Providers;

use App\Services\DummyRequestLogger;
use App\Services\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface:: class, DummyRequestLogger::class, function () {
            return new DummyRequestLogger($this->app->make(LoggerInterface::class));
        });
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
