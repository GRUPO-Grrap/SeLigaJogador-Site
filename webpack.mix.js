const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
      plugins: [
         new BrowserSyncPlugin({
            proxy: 'localhost:8000',
            files: [
               'app/**/*.php',
               'resources/views/**/*.php',
               'public/js/**/*.js',
               'public/css/**/*.css'
            ]
         })
      ]
   });
