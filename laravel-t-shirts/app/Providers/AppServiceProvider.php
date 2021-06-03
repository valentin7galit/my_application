<?php

namespace App\Providers;

use App\Services\BrowserRequestLogger;
use App\Services\IPAddressRequestLogger;
use App\Services\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;
use Illuminate\Support\ServicesProvider;
use Illuminate\Events\Dispatcher;
use App\Services\ResponseLoggerInterface;
use App\Services\DebugResponseLogger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {   
        $this->app->bind(RequestLoggerInterface::class, function() {
            if ($this->app->environment('local')) {
                return new BrowserRequestLogger($this->app->make(LoggerInterface::class));
            } else {
                return new IPAddressRequestLogger($this->app->make(LoggerInterface::class));
            }
        });

        $this->app->bind(ResponseLoggerInterface::class, function() {
            return new DebugResponseLogger($this->app->make(LoggerInterface::class), $this->app->make(Dispatcher::class));
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
