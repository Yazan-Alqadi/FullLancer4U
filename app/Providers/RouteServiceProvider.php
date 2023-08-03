<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::prefix('service')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/service.php'));

            Route::prefix('project')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/project.php'));

            Route::prefix('user')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/user.php'));

            Route::prefix('freelancer')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/freelancer.php'));

            Route::prefix('message')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/message.php'));

            Route::prefix('work')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/work.php'));

            Route::prefix('skill')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/skill.php'));

            Route::prefix('notification')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/notification.php'));

            Route::prefix('stripe')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/stripe.php'));

            Route::prefix('gallery')
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/gallery.php'));

            Route::prefix('auth')
                ->middleware(['web', 'guest'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/auth.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
