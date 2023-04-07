<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('contact',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('contact');
        });
        Gate::define('product',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('product');
        });
        Gate::define('user',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('user');
        });
        Gate::define('employee',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('employee');
        });
        Gate::define('category',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('category');
        });
        Gate::define('article',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('article');
        });
        Gate::define('transaction',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('transaction');
        });
        Gate::define('permission',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('permission');
        });
        Gate::define('rating',function ($user=null){
            $user=Auth::guard('admins')->user();
            if(is_null($user)){
                return false;
            }
            return $user->checkPermission('rating');
        });

    }
}
