<?php

namespace App\Providers;

use App\Models\Csc;
use App\Models\Etat;
use App\Models\Sous_categorie;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        View::share('etat_data', Etat::all());
        View::share('csc_data', Csc::all());
        View::share('categorie_data', Sous_categorie::all());
    }
}
