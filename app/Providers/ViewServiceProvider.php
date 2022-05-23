<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('components.header', function ($view) {
            $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
            $view->with(compact('services'));
        });
    }
}
