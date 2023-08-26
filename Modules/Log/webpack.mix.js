const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/lang.th.js', 'js/log.th.js')
mix.js(__dirname + '/Resources/assets/js/lang.en.js', 'js/log.en.js')

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/log.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/log.css');

if (mix.inProduction()) {
    mix.version();
}
