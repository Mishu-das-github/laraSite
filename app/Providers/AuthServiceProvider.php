<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //Check for admin
        //Return True if the auth user type is admin

        $gate->define('isAdmin',function($user){
            return $user->user_type=='admin';
        });

        //Check for Author
        //Return True if the auth user type is Author

        $gate->define('isAuthor',function($user){
       return $user->user_type=='author';
        });

        //Check for Editor
        //Return True if the auth user type is Editor

        $gate->define('isEditor',function($user){
          return $user->user_type=='editor';
        });

        //Check for Editor
        //Return True if the auth user type is Editor

        $gate->define('isUser',function($user){
            return $user->user_type=='user';
          });

        
    }
}
