var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('resources/assets/semantic/dist/semantic.min.css', 'public/assets/semantic/main.min.css');
    mix.scripts([
    	'node_modules/jquery/dist/jquery.min.js',
    	'resources/assets/semantic/dist/semantic.min.js',
    	'resources/assets/js/app.js',
    ], 'public/assets/plugins.min.js');

    mix.sass('resources/assets/sass/app.scss');
});
