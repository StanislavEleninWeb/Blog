<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Role' => 'App\Policies\Admin\RolePolicy',
        'App\User' => 'App\Policies\Admin\UserPolicy',
        'App\Category' => 'App\Policies\Admin\CategoryPolicy',
    ];

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $gates = [
        // 'see-config' => 'App\Gates\ConfigGate',
        // 'publish-article' => 'App\Gates\ArticleGate@publish',
        // 'approve-article' => 'App\Gates\ArticleGate@approve',
        'viewAny-admin' => 'App\Policies\Gates\Admin\AdminPolicy@viewAny',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerGates();
    }

    /**
     * Register the application's gates.
     *
     * @return void
     */
    public function registerGates()
    {
        foreach ($this->gates as $key => $value) {
            Gate::define($key, $value);
        }
    }
}
