<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //Model::preveneLazyLoading();

        //Model::preventLazyLoading();
        //Paginator::useBootstrapFive();
        Paginator::useBootstrap();
        // Gate::define('edit-job',function(User $user, Job $job){
        //     return $job->enployer->user->is($user);
        // });
    }
}
