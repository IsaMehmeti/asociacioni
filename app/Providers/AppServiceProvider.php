<?php

namespace App\Providers;

use App\Models\Event;
use Carbon\Carbon;
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
        $today = new Carbon;
        view()->share('events', Event::whereDate('start', '>=', $today->format('Y-m-d h:m:s'))->get());
    }
}
