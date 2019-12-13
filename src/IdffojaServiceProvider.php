<?php

namespace Idffoja\LaravelPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class IdffojaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('idffoja', function ($command) {
            Preset::install();

            $command->info('Laravel Preset Installed Successfully.');
        });
    }
}
