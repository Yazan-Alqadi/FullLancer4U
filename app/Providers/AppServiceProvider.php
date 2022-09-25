<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
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
        //

       //URL::forceScheme('https');


        Model::unguard();
        Paginator::useBootstrap();
        Model::preventLazyLoading();
        Model::handleLazyLoadingViolationUsing(

            fn ($model, $relation) => logger("lazy")

        );
    }
}
