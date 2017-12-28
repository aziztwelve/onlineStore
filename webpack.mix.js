let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/css/app.css');
   // .less('resources/assets/less/app.less', 'public/css/app.css');
mix.sass('resources/assets/sass/main.scss', 'public/css/header.css');
mix.sass('resources/assets/sass/pink.scss', 'public/css/pink.css');

// mix.browserSync('http://127.0.0.1:8000');