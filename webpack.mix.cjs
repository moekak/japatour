const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    // .js("resources/js/websocket.js", 'public/js')
    .js("resources/js/main.js", 'public/js')
    .js("resources/js/common.js", 'public/js')
    .js("resources/js/show.js", 'public/js')
    .setPublicPath('public')
    .webpackConfig({
        resolve: {
            fallback: {
                buffer: false,  // buffer モジュールを無効化
                process: false  // process モジュールを無効化
            }
        },
    })
