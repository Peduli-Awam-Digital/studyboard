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

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/themes/auth.js', 'public/js/themes')
	.js('resources/js/themes/dashboard.js', 'public/js/themes')
	.js('resources/js/pages/login.js', 'public/js/pages')
	.js('resources/js/pages/home.js', 'public/js/pages')
    .sass('resources/sass/themes/auth.scss', 'public/css/themes')
    .sass('resources/sass/themes/dashboard.scss', 'public/css/themes');
