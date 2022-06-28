<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
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

        View::composer('components.footer', function ($view) {
            $services = Service::query()->where('status', Service::ACTIVE_STATUS)->take(8)->get();
            $view->with(compact('services'));
        });


        View::composer('*', function ($view) {
            $setting = Setting::getAll();
            $view->with(compact('setting'));
        });
    }
}
