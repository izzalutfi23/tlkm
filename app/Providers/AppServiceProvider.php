<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Kategori;

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
        $kat = Kategori::with('subkat')->get();
        view()->share('key', $kat);
    }
}
