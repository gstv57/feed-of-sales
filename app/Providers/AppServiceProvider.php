<?php

declare(strict_types = 1);

namespace App\Providers;

use Faker\Factory;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\Faker\Generator::class, fn() => Factory::create('pt_BR'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->setupLogViewer();
    }

    private function setupLogViewer()
    {
        LogViewer::auth(fn ($request) => $request->user()?->is_admin);
    }
}
