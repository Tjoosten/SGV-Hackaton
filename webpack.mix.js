const mix = require('laravel-mix');

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

mix // Laravel asset runner

   // Application view assets.
   .js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   
   // Authententication assets
   .js('resources/js/auth.js', 'public/js')
   .sass('resources/sass/auth.scss', 'public/css');
