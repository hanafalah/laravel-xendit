<?php

declare(strict_types=1);

namespace Hanafalah\LaravelXendit\Providers;

use Illuminate\Support\ServiceProvider;
use Hanafalah\LaravelXendit\Commands as Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
    ];


    public function register()
    {
        $this->commands(config('laravel-xendit.commands', $this->commands));
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */

    public function provides()
    {
        return $this->commands;
    }
}
