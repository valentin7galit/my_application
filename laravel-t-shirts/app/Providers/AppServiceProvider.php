<?php

namespace App\Providers;

use App\Services\BrowserRequestLogger;
use App\Services\IPAddressRequestLogger;
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
        if (env('APP_DEBUG') === false) {
            $this->app->bind(RequestLoggerInterface:: class, IPAddressRequestLogger::class, function () {
                return new IPAddressRequestLogger($this->app->make(LoggerInterface::class));
            });
        } else {
            $this->app->bind(RequestLoggerInterface:: class, BrowserRequestLogger::class, function () {
                return new BrowserRequestLogger($this->app->make(LoggerInterface::class));
            });
        }
        
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
