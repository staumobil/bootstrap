var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
  var env = argv.e || argv.env || 'local';
  var port = argv.p || argv.port || 3000;

  mix.sass('main.scss', elixir.config.publicPath + '/stylesheets')
    .browserify('main.js', elixir.config.publicPath + '/javascripts')
    .copy('node_modules/staumobil-bootstrap/images', 'source/images')
    .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'source/fonts')
    .copy('node_modules/font-awesome/fonts', 'source/fonts')
    .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    .browserSync({
      port: port,
      server: {
        baseDir: 'build_' + env
      },
      proxy: null,
      files: ['build_' + env + '/**/*']
    });
});
