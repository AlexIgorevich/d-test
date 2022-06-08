let mix = require('laravel-mix');
const TargetsPlugin = require('targets-webpack-plugin')
mix.webpackConfig({
    plugins: [
        new TargetsPlugin({
            browsers: ['last 6 versions', 'chrome >= 41', 'IE 11'],
        }),
    ]
})
mix.js('src/scripts/app.js', 'dist/js')
    .sass('src/styles/app.scss', 'dist/css')