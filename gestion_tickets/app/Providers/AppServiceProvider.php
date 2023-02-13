<?php

namespace App\Providers;

use App\Models\Csc;
use App\Models\Etat;
use Illuminate\Support\Facades\View;
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
        View::share('etat_data', Etat::all());
        View::share('csc_data', Csc::all());
    }
}
