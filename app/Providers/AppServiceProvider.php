<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadApiKeys();
    }

    protected function loadApiKeys()
    {
        config([
            'api_keys' => require config_path('api_keys.php'),
        ]);
    }
}
