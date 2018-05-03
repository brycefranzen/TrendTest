let mix = require('laravel-mix');

// // footer js concatenation
mix.scripts([
  // 'resources/assets/lib/stickit/js/stickit.js',
], 'public/assets/bottom.min.js');

mix.sass('resources/assets/sass/app.scss', 'public/assets/all.min.css')
  .options({
    processCssUrls: false
  });


// make all assets versioned in production
if (process.env.NODE_ENV == "production") {
    mix.version();
} else {
  mix.webpackConfig({
        devtool: 'source-map'
    }).sourceMaps();

  // browsersync settings
  mix.browserSync({
    injectChanges: true,
    port: 3001,
    ui: {
      port: 3002
    },
    proxy: 'localhost:8000',
    files: [
      "public/assets/all.min.css",
      "public/assets/*.js"
    ],
    notify: false,
    reload: false,
    reloadDebounce: 250
  });
}

