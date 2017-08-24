<?php

namespace App\Providers;

use App\Model\Admin\Category;
use App\Observers\CommonObservers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set Observe for Models
        Category::observe(CommonObservers::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
