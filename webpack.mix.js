let mix = require('laravel-mix')

/* Allow Us To Compile Stylus in app.js */
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.styl$/,
                loader: ['style-loader', 'css-loader', 'stylus-loader']
            }
        ]
    },
    resolve:{
        /* Path Shortcuts */
        alias:{
            /* root */
            '~': path.resolve(__dirname, 'resources/assets/js'),
            Components: path.resolve(__dirname, 'resources/assets/js/components'),
            Routes: path.resolve(__dirname, 'resources/assets/js/routes'),
            Pages: path.resolve(__dirname, 'resources/assets/js/pages'),
            /* vuex modules */
            Modules: path.resolve(__dirname, 'resources/assets/js/store/modules'),
            Layouts: path.resolve(__dirname, 'resources/assets/js/store/layouts'),
            Partials: path.resolve(__dirname, 'resources/assets/js/partials'),
            Services: path.resolve(__dirname, 'resources/assets/js/services'),
            Api: path.resolve(__dirname, 'resources/assets/js/api'),
            Mixins: path.resolve(__dirname, 'resources/assets/js/mixins'),
            /* Jquery Plugins */
            Plugins: path.resolve(__dirname, 'resources/assets/js/plugins')
        }
    }
})
mix.js('resources/assets/js/app.js', 'public/js')
    /* extract all vendor */
    .extract([
        'axios', 'vue', 'vuetify'
    ])
mix.sass('resources/assets/sass/app.scss', 'public/css')
mix.sourceMaps()
if (mix.inProduction()) {
    mix.version()
    mix.disableNotifications()
}

