<?php

namespace Kerisi\LaravelJoget;

use Illuminate\Support\ServiceProvider;

class JogetDxAPIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../config/jogetdx.php' => config_path('jogetdx.php')
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
