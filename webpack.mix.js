let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/**
 * CKE stuff
 */
const CKEditorWebpackPlugin = require( '@ckeditor/ckeditor5-dev-webpack-plugin' );
const CKEStyles = require('@ckeditor/ckeditor5-dev-utils').styles;
const CKERegex = {
    svg: /ckeditor5-[^/\\]+[/\\]theme[/\\]icons[/\\][^/\\]+\.svg$/,
    css: /ckeditor5-[^/\\]+[/\\]theme[/\\].+\.css/,
};

Mix.listen('configReady', webpackConfig => {
    const rules = webpackConfig.module.rules;
    const targetSVG = /(\.(png|jpe?g|gif|webp)$|^((?!font).)*\.svg$)/;
    const targetCSS = /\.css$/;

    // Exclude CKE regex from mix's default rules
    for (let rule of rules) {
        if (rule.test.toString() === targetSVG.toString()) {
            rule.exclude = CKERegex.svg;
        }
        else if (rule.test.toString() === targetCSS.toString()) {
            rule.exclude = CKERegex.css;
        }
    }
});

mix.webpackConfig({
    plugins: [
        new CKEditorWebpackPlugin({
            language: 'ru',
			addMainLanguageTranslationsToAllAssets: true
        })
    ],
    module: {
        rules: [
            {
                test: CKERegex.svg,
                use: [ 'raw-loader' ]
            },
            {
                test: CKERegex.css,
                use: [
                    {
                        loader: 'style-loader',
                        options: {
                            singleton: true
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: CKEStyles.getPostCssConfig({
                            themeImporter: {
                                themePath: require.resolve('@ckeditor/ckeditor5-theme-lark')
                            },
                            minify: true
                        })
                    },
                ]
            }
        ]
    }
});

mix.js('resources/js/dashboard.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/profile/profile.js', 'public/js')
    .sass('resources/sass/dashboard.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/file-manager.scss', 'public/css')
    .sass('resources/sass/profile.scss', 'public/css')
    .combine([
        'node_modules/hamburgers/dist/hamburgers.css',
        'node_modules/flickity/dist/flickity.css',
        'node_modules/flickity-fullscreen/fullscreen.css',
        'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css',
        'public/css/app.css',
    ], 'public/css/styles.css')
    .combine([
        'node_modules/sticky-sidebar/dist/sticky-sidebar.js',
        'node_modules/flickity/dist/flickity.pkgd.js',
        'node_modules/blazy/blazy.js',
        'resources/js/menu.js',
    ], 'public/js/scripts.js')
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.sourceMaps().version();
}
