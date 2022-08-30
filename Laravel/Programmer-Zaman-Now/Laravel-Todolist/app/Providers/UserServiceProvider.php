<?php

namespace App\Providers;

use App\Services\UserService;
use App\Sevices\Impl\UserServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singeltons = [
        UserService::class => UserServiceImpl::class
    ];
    public function provides(): array
    {
        return [UserService::class];
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
