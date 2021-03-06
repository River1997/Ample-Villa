<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // 新增 1
        Gate::define('admin', function ($user)
        {
            return $user->role === User::ROLE_ADMIN; // 管理者
        });
        // 新增 2
        Gate::define('user', function ($user)
        {
            return $user->role === User::ROLE_USER; // 一般身分別
        });

        //
    }
}
