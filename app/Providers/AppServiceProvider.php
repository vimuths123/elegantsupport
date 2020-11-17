<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Reply;
use App\Observers\ReplyObserver;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Reply::observe(ReplyObserver::class);
    }
}
