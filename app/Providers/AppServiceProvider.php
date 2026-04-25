<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

/**
 * membuat AppServiceProvider untuk mendefinisikan gate 'manage-product'
 *  yang hanya dapat diakses oleh pengguna dengan peran 'admin'
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('manage-product', function ($user) {
            return $user->role === 'admin';
        });
    }
}
