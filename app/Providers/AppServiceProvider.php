<?php

namespace App\Providers;

use App\PostcardServices;
use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton('PostCard',function(){
            return new PostcardServices($country = "BD", $width = 100);
        });
        // OR
        // $this->app->bind('PostCard',function(){
        //     return new PostcardServices($country = "BD", $width = 100);
        // });
        // OR
        // app()->bind('PostCard',function(){
        //     return new PostcardServices($country = "BD", $width = 100);
        // });
    }
}
