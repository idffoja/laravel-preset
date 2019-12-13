<?php

namespace Idffoja\LaravelPreset;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Facades\File;

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::cleanSassDirectory();
        static::updatePackages();
        static::updateMix();
        static::updateScripts();
        static::updateSass();
    }

    public static function cleanSassDirectory()
    {
        File::cleanDirectory(resource_path('sass'));
    }

    public static function updatePackageArray()
    {
        return [
            'axios' => '^0.19.0',
            'cross-env' => '^6.0.3',
            'fomantic-ui-css' => '^2.8.2',
            'jquery' => '^3.4.1',
            'laravel-mix' => '^5.0.0',
            'resolve-url-loader' => '^3.1.1',
            'sass' => '^1.23.7',
            'sass-loader' => '^8.0.0',
            'vee-validate' => '^3.1.3',
            'vue' => '^2.6.10',
            'vue-template-compiler' => '^2.6.10'
        ];
    }

    public static function updateMix()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateScripts()
    {
        File::cleanDirectory(resource_path('js'));
        File::makeDirectory(resource_path('js/components'));
        copy(__DIR__.'/stubs/app.js', resource_path('js/app.js'));
    }

    public static function updateSass()
    {
        File::cleanDirectory(resource_path('sass'));
        copy(__DIR__.'/stubs/app.scss', resource_path('sass/app.scss'));
    }
}