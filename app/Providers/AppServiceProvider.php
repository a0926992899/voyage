<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('zh_TW');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        //全域共享
        View()->share('tel', '021315156');
        //部分共享
        // View()->composer(['layouts.*'], function ($view) {
        //     $view()->with('add', '中山路一段');
        // });
        view()->composer(['layouts.*'], function ($view) {
            $view->with('add', '中山路一號');
            // test
        });
    }
}
