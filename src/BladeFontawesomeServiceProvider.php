<?php

declare(strict_types=1);

namespace MohSlimani\Fontawesome;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeFontawesomeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-fontawesome', []);

            $factory->add('fontawesome', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-fontawesome.php', 'blade-fontawesome');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-fontawesome'),
            ], 'blade-fontawesome');

            $this->publishes([
                __DIR__.'/../config/blade-fontawesome.php' => $this->app->configPath('blade-fontawesome.php'),
            ], 'blade-fontawesome-config');
        }
    }
}
