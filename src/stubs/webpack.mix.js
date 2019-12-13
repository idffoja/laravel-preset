const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/fomantic-ui-css/semantic.min.js'
    ], 'public/js/semantic.js')
    .styles([
        'node_modules/fomantic-ui-css/semantic.min.css'
    ], 'public/css/semantic.css')
    .copyDirectory('node_modules/fomantic-ui-css/themes/default/assets/images', 'public/css/themes/default/assets/images')
    .copyDirectory('node_modules/fomantic-ui-css/themes/default/assets/fonts', 'public/css/themes/default/assets/fonts');
