<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Topic;


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
     * shares topics
     *
     * @return
     */
    public function boot()
    {
        //
        $sidebarlinks = Topic::orderBy('title')->get();
        return view()->share('sidebarlinks', $sidebarlinks);
    }
}
