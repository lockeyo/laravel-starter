var gulp = require('gulp');
var elixir = require('laravel-elixir');

var paths = {
 'jquery': 'vendor/jquery/dist',
 'bootstrap': 'vendor/bootstrap/dist',
 'fontawesome': 'vendor/font-awesome',
 'unslider': 'vendor/unslider/dist'
}

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
  '../../' + paths.unslider + '/css/unslider.css',
  '../../' + paths.unslider + '/css/unslider-dots.css',
  'style.css',
  'slider.css',
  'footer.css',
  'page-home.css'
 ], 'public/css/site.css');

 // Merge Site scripts.
 mix.scripts([
  '../../' + paths.jquery + '/jquery.js',
  '../../' + paths.bootstrap + '/js/bootstrap.js',
  '../../' + paths.unslider + '/js/unslider-min.js',
  'scripts.js'
 ], 'public/js/site.js');

});
