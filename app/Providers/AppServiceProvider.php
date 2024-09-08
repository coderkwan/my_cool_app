<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        if (App::environment('production')) {
            resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');
        }
    }
}
