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

	// compile styles for admin area
    mix.less([
    	'AdminLTE/build/less/AdminLTE.less',
    	'AdminLTE/build/less/skins/_all-skins.less', // Custom styles are compiled separately below
    ], 'public/css/admin-lte.css');

	// custom sass styles for admin area
	mix.sass([
		'admin/styles.scss',
	], 'public/css/custom-admin.css');

	// custom sass styles for admin area
	mix.sass([
		'public/styles.scss',
	], 'public/css/custom-public.css');



});
