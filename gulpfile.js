var gulp = require('gulp');
var elixir = require('laravel-elixir');

var paths = {
 'jquery': 'vendor/jquery/dist',
 'bootstrap': 'vendor/bootstrap/dist',
 'fontawesome': 'vendor/font-awesome'
};

elixir.config.sourcemaps = false;

elixir(function(mix) {
 // Copy fonts straight to public
 mix.copy('resources/' + paths.bootstrap + '/fonts/bootstrap/**', 'public/fonts');
 mix.copy('resources/' + paths.fontawesome + '/fonts/**', 'public/fonts');
 mix.copy('resources/assets/fonts/**', 'public/fonts');

 // Copy images straight to public
 mix.copy('resources/assets/images/**', 'public/images');

 // Merge Site CSSs.
 mix.styles([
  '../../' + paths.bootstrap + '/css/bootstrap.css',
  '../../' + paths.fontawesome + '/css/font-awesome.css',
  'style.css',
  'footer.css'
 ], 'public/css/site.css');

 // Merge Site scripts.
 mix.scripts([
  'jquery-2.1.4.min.js',
  '../../' + paths.bootstrap + '/js/bootstrap.js',
  'scripts.js'
 ], 'public/js/site.js');

});
