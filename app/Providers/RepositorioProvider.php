<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositorioProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Contracts\LivroRepository::class, 
            \App\Repositories\LivroRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Contracts\AutorRepository::class, 
            \App\Repositories\AutorRepositoryEloquent::class
        );
    }
}
