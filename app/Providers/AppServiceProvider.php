<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Services\PaymentGateway;
use App\Services\PaymentService;
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
        $this->app->bind(PaymentGateway::class, function() {
            return new PaymentGateway('123');
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
