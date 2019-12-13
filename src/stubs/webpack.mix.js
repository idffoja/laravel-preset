const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/fomantic-ui-css/dist/semantic.min.js'
    ], 'js/semantic.js')
    .styles([
        'node_modules/fomantic-ui-css/dist/semantic.min.css'
    ], 'css/semantic.css')
    .copyDirectory('node_modules/fomantic-ui-css/dist/themes/default/assets/images', 'css/themes/default/assets/images')
    .copyDirectory('node_modules/fomantic-ui-css/dist/themes/default/assets/fonts', 'css/themes/default/assets/fonts');
