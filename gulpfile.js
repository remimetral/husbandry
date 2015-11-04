var elixir = require('laravel-elixir'),
	notify = require("gulp-notify");

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var bower_path = "./vendor/bower_components";
var paths = {
	'jquery'     : bower_path + "/jquery/dist",
	'bootstrap'  : bower_path + "/bootstrap-sass-official/assets",
	'fontawesome': bower_path + "/fontawesome",
	'foundation' : bower_path + "/foundation"
};

elixir(function(mix) {
	//mix.less('app.less');

	mix.sass("app.scss", "public/assets/css", {
		includePaths: [
			paths.bootstrap + '/stylesheets',
			paths.fontawesome + '/scss',
			paths.foundation + '/scss'
		]
	});

	/*mix.styles([
		'public/assets/css/app.css'
	], 'public/assets/css/all.min.css', './');*/

	/*mix.styles([
		'public/css/admin.css',
		elixir.config.bowerDir + '/animate.css/animate.css',
		elixir.config.bowerDir + '/metisMenu/dist/metisMenu.css'
	], 'public/css/admin.css', './');*/

	mix.scripts([
		paths.jquery + '/jquery.min.js',
		paths.bootstrap + '/javascripts/bootstrap.min.js',
	    elixir.config.bowerDir + "/modernizr/modernizr.js",
	    //elixir.config.bowerDir + "/jquery/dist/jquery.js",
	    elixir.config.bowerDir + "/fastclick/lib/fastclick.js",
	    //elixir.config.bowerDir + "/foundation/js/foundation/foundation.js",
	    //elixir.config.bowerDir + "/foundation/js/foundation/foundation.equalizer.js",
	    elixir.config.bowerDir + "/history/scripts/uncompressed/history.js",
	    elixir.config.bowerDir + "/gsap/src/uncompressed/TweenMax.js",
	    elixir.config.bowerDir + "/jquery-validation/dist/jquery.validate.js",
	    elixir.config.bowerDir + "/jquery-validation/dist/additional-methods.js",
	    'resources/assets/js/vendor/jquery.cloud.min.js',
	    'resources/assets/js/helpers.js',
	    'resources/assets/js/pages/page_home.js',
	    'resources/assets/js/pages/page_about.js',
	    'resources/assets/js/pages/page_works.js',
	    'resources/assets/js/deeplink.js',
	    'resources/assets/js/app.js',
	], 'public/assets/js/all.min.js', './');

  	/*mix.scripts([
	    elixir.config.bowerDir + "/jquery/dist/jquery.js",
	    elixir.config.bowerDir + "/bootstrap-sass-official/assets/javascripts/bootstrap.js",
	    elixir.config.bowerDir + "/metisMenu/dist/metisMenu.js",
	    elixir.config.bowerDir + "/slimScroll/jquery.slimscroll.js",
	    elixir.config.bowerDir + "/pace/pace.js",
	    //elixir.config.bowerDir + "/jquery-ui/jquery-ui.js",
	    //elixir.config.bowerDir + "/metisMenu/dist/metisMenu.js",
	    //elixir.config.bowerDir + "/slimScroll/jquery.slimscroll.js",
	    //elixir.config.bowerDir + "/PACE/pace.js",
	    //elixir.config.bowerDir + // inspinia here
	    //elixir.config.bowerDir + "/angular/angular.js",
	    //elixir.config.bowerDir + //ocLazyLoad
	    //elixir.config.bowerDir + "/angular/angular.js",
	    //elixir.config.bowerDir + //angular translate
	    //elixir.config.bowerDir + "/angular-ui-router/release/angular-ui-router.js",
	    'resources/assets/js/vendor/inspinia.js',
	    'resources/assets/js/admin.js'
	], 'public/assets/js/admin.js', './');*/

	mix.version([
	   	'assets/css/app.css',
	    'assets/js/all.min.js'
	]);
	   
	mix.copy('resources/assets/ico', 'public/assets/ico');
	mix.copy('resources/assets/img', 'public/assets/img');
	mix.copy('resources/assets/pdf', 'public/assets/pdf');
	mix.copy(paths.fontawesome + '/fonts', 'public/assets/fonts');
	//mix.copy(elixir.config.bowerDir + '/font-awesome/fonts', 'public/assets/fonts');

});
