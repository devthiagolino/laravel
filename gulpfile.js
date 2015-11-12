var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {
  
  mix.styles([
  	"/libs/**"
  	], 'public/assets/css/libs.css');

  mix.styles([
  	"/main.css"
  	], 'public/assets/css/main.css');

  mix.scripts([
  	'/libs/**',
  	], 'public/assets/js/libs.js');

  mix.scripts([
  	'/main.js',
  	], 'public/assets/js/main.js');

  mix.copy('resources/assets/fonts', 'public/assets/fonts');


});
