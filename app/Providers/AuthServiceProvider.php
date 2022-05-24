<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Router;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('check-permission', CheckPermission::class);
    }
}
