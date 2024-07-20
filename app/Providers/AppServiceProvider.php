<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;

use App\Policies\PostPolicy;

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

        // Gate::define('edit-post', function(User $user, Post $post){
        //      return $post->user->is(auth()->user());
        //      return true;
        //      return $post->user->id == auth()->user()->id;
        // });

        Gate::policy(Post::class, PostPolicy::class);
        Gate::policy(Member::class, MemberPolicy::class);
        Gate::policy(Bial::class, BialPolicy::class);
        Gate::policy(Attmaster::class, AttmasterPolicy::class);
    }
}
