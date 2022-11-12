<?php

namespace Katyusha\Package;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider {
    protected string $packageNamespace = 'package';

    public function boot(): void {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->mergeConfigFrom(__DIR__."/../config/{$this->packageNamespace}.php", $this->packageNamespace);
        $this->registerRoutes();
    }

    public function register() {
    }

    protected function registerRoutes(): void {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }

    protected function routeConfiguration(): array {
        return [
            'prefix' => $this->packageNamespace,
        ];
    }
}
