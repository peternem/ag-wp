'use strict';

import plugins       from 'gulp-load-plugins';
import yargs         from 'yargs';
import browser       from 'browser-sync';
import gulp          from 'gulp';
import rimraf        from 'rimraf';
import yaml          from 'js-yaml';
import fs            from 'fs';
import dateFormat    from 'dateformat';
import webpackStream from 'webpack-stream';
import webpack2      from 'webpack';
import named         from 'vinyl-named';
import log           from 'fancy-log';
import colors        from 'ansi-colors';


import sassLint      from 'gulp-sass-lint';

import postcss      from 'gulp-postcss';
import reporter     from 'postcss-reporter';
import syntax_scss  from 'postcss-scss';
import stylelint    from 'stylelint';


// Load all Gulp plugins into one variable
const $ = plugins();

// Check for --production flag
const PRODUCTION = !!(yargs.argv.production);

// Check for --development flag unminified with sourcemaps
const DEV = !!(yargs.argv.dev);

// Load settings from settings.yml
const { BROWSERSYNC, COMPATIBILITY, REVISIONING, PATHS } = loadConfig();

// Check if file exists synchronously
function checkFileExists(filepath) {
    let flag = true;
    try {
        fs.accessSync(filepath, fs.F_OK);
    } catch(e) {
        flag = false;
    }
    return flag;
}

// Load default or custom YML config file
function loadConfig() {
    log('Loading config file...');

    if (checkFileExists('config.yml')) {
        // config.yml exists, load it
        log(colors.bold(colors.cyan('config.yml')), 'exists, loading', colors.bold(colors.cyan('config.yml')));
        let ymlFile = fs.readFileSync('config.yml', 'utf8');
        return yaml.load(ymlFile);

    } else if(checkFileExists('config-default.yml')) {
        // config-default.yml exists, load it
        log(colors.bold(colors.cyan('config.yml')), 'does not exist, loading', colors.bold(colors.cyan('config-default.yml')));
        let ymlFile = fs.readFileSync('config-default.yml', 'utf8');
        return yaml.load(ymlFile);

    } else {
        // Exit if config.yml & config-default.yml do not exist
        log('Exiting process, no config file exists.');
        log('Error Code:', err.code);
        process.exit(1);
    }
}

// Lint the Sass
gulp.task("scss-lint", function() {

    // Stylelint config rules
    var stylelintConfig = {
        "plugins":[
            "stylelint-order"
        ],
        "rules": {
            "color-hex-case": "lower",
            "block-no-empty": true,
            "color-no-invalid-hex": true,
            "declaration-colon-space-after": "always",
            "declaration-colon-space-before": "never",
            "function-comma-space-after": "always",
            "function-url-quotes": "always",
            "media-feature-colon-space-after": "always",
            "media-feature-colon-space-before": "never",
            "media-feature-name-no-vendor-prefix": true,
            "max-empty-lines": 5,
            "number-leading-zero": "always",
            "number-no-trailing-zeros": true,
            "property-no-vendor-prefix": true,
            //"rule-no-duplicate-properties": true,
            "declaration-block-single-line-max-declarations": 1,
            //"rule-trailing-semicolon": "always",
            "no-extra-semicolons": true,
            "selector-list-comma-space-before": "never",
            "selector-list-comma-newline-after": "always-multi-line",
            "selector-max-id": 2,
            //"string-quotes": "single",
            "value-no-vendor-prefix": true,
            "order/properties-order": [
                "display",
                "position",
                "top",
                "right",
                "bottom",
                "left",
                "flex",
                "flex-basis",
                "flex-direction",
                "flex-flow",
                "flex-grow",
                "flex-shrink",
                "flex-wrap",
                "align-content",
                "align-items",
                "align-self",
                "justify-content",
                "order",
                "width",
                "min-width",
                "max-width",
                "height",
                "min-height",
                "max-height",
                "margin",
                "margin-top",
                "margin-right",
                "margin-bottom",
                "margin-left",
                "padding",
                "padding-top",
                "padding-right",
                "padding-bottom",
                "padding-left",
                "float",
                "clear",
                "clip",
                "columns",
                "column-gap",
                "column-fill",
                "column-rule",
                "column-span",
                "column-count",
                "column-width",
                "transform",
                "transform-box",
                "transform-origin",
                "transform-style",
                "transition",
                "transition-delay",
                "transition-duration",
                "transition-property",
                "transition-timing-function",
                "border",
                "border-top",
                "border-right",
                "border-bottom",
                "border-left",
                "border-width",
                "border-top-width",
                "border-right-width",
                "border-bottom-width",
                "border-left-width",
                "border-style",
                "border-top-style",
                "border-right-style",
                "border-bottom-style",
                "border-left-style",
                "border-radius",
                "border-top-left-radius",
                "border-top-right-radius",
                "border-bottom-left-radius",
                "border-bottom-right-radius",
                "border-color",
                "border-top-color",
                "border-right-color",
                "border-bottom-color",
                "border-left-color",
                "outline",
                "outline-color",
                "outline-offset",
                "outline-style",
                "outline-width",
                "background",
                "background-attachment",
                "background-clip",
                "background-color",
                "background-image",
                "background-repeat",
                "background-position",
                "background-size",
                "color",
                "font",
                "font-family",
                "font-size",
                "font-smoothing",
                "font-style",
                "font-variant",
                "font-weight",
                "letter-spacing",
                "line-height",
                "list-style",
                "text-align",
                "text-decoration",
                "text-indent",
                "text-overflow",
                "text-rendering",
                "text-shadow",
                "text-transform",
                "text-wrap",
                "white-space",
                "word-spacing",
                "border-collapse",
                "border-spacing",
                "box-shadow",
                "caption-side",
                "content",
                "cursor",
                "empty-cells",
                "opacity",
                "overflow",
                "quotes",
                "speak",
                "table-layout",
                "vertical-align",
                "visibility",
                "z-index"
            ]
        },

    }

    var processors = [
        stylelint(stylelintConfig),
        reporter({
            clearReportedMessages: true,
            clearMessages: true,
            throwError: false
        })
    ];

    return gulp.src(
        ['src/scss/**/*.scss',
        // Ignore linting vendor assets
        // Useful if you have bower components
        '!src/scss/vendor/**/*.scss']
    )
    .pipe(postcss(processors, {syntax: syntax_scss}));
});



// Delete the "dist" folder
// This happens every time a build starts
function clean(done) {
    rimraf(PATHS.dist, done);
}

// Copy files out of the assets folder
// This task skips over the "images", "js", and "scss" folders, which are parsed separately
function copy() {
    return gulp.src(PATHS.assets)
    .pipe(gulp.dest(PATHS.dist + '/'));
}

// Compile Sass into CSS
// In production, the CSS is compressed
function sass() {
    return gulp.src(['src/scss/app.scss','src/scss/editor.scss'])
    .pipe($.sourcemaps.init())
    .pipe($.sass({
        includePaths: PATHS.sass,
        outputStyle: 'nested'
    })
    .on('error', $.sass.logError))
    .pipe($.autoprefixer({
        browsers: COMPATIBILITY
    }))

    .pipe($.if(PRODUCTION, $.cleanCss({ compatibility: 'ie9' })))
    .pipe($.if(!PRODUCTION, $.sourcemaps.write()))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev()))
    .pipe(gulp.dest(PATHS.dist + '/css'))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev.manifest()))
    .pipe(gulp.dest(PATHS.dist + '/css'))
    .pipe(browser.reload({ stream: true }));
}

// Combine JavaScript into one file
// In production, the file is minified
const webpack = {
    config: {
        module: {
            rules: [
                {
                    test: /.js$/,
                    loader: 'babel-loader',
                    exclude: /node_modules(?![\\\/]foundation-sites)/,
                },
            ],
        },
        externals: {
            jquery: 'jQuery',
        },
    },

    changeHandler(err, stats) {
        log('[webpack]', stats.toString({
            colors: true,
        }));

        browser.reload();
    },

    build() {
        return gulp.src(PATHS.entries)
        .pipe(named())
        .pipe(webpackStream(webpack.config, webpack2))
        .pipe($.if(PRODUCTION, $.uglify()
        .on('error', e => { console.log(e); }),
    ))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev()))
    .pipe(gulp.dest(PATHS.dist + '/js'))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev.manifest()))
    .pipe(gulp.dest(PATHS.dist + '/js'));
},

watch() {
    const watchConfig = Object.assign(webpack.config, {
        watch: true,
        devtool: 'inline-source-map',
    });

    return gulp.src(PATHS.entries)
    .pipe(named())
    .pipe(webpackStream(watchConfig, webpack2, webpack.changeHandler)
    .on('error', (err) => {
        log('[webpack:error]', err.toString({
            colors: true,
        }));
    }),
)
.pipe(gulp.dest(PATHS.dist + '/js'));
},
};

gulp.task('webpack:build', webpack.build);
gulp.task('webpack:watch', webpack.watch);

// Copy images to the "dist" folder
// In production, the images are compressed
function images() {
    return gulp.src('src/images/**/*')
    .pipe($.if(PRODUCTION, $.imagemin([
        $.imagemin.jpegtran({
            progressive: true,
        }),
        $.imagemin.optipng({
            optimizationLevel: 5,
        }),
        $.imagemin.gifsicle({
            interlaced: true,
        }),
        $.imagemin.svgo({
            plugins: [
                {cleanupAttrs: true},
                {removeComments: true},
            ]
        })
    ])))
    .pipe(gulp.dest(PATHS.dist + '/images'));
}

// Create a .zip archive of the theme
function archive() {
    var time = dateFormat(new Date(), "yyyy-mm-dd_HH-MM");
    var pkg = JSON.parse(fs.readFileSync('./package.json'));
    var title = pkg.name + '_' + time + '.zip';

    return gulp.src(PATHS.package)
    .pipe($.zip(title))
    .pipe(gulp.dest('packaged'));
}

// PHP Code Sniffer task
// gulp.task('phpcs', function() {
//   return gulp.src(PATHS.phpcs)
//     .pipe($.phpcs({
//       bin: 'wpcs/vendor/bin/phpcs',
//       //standard: 'codesniffer.ruleset.xml',
//       showSniffCode: true,
//       standard: 'PSR2',
//       warningSeverity: 0
//     }))
//     .pipe($.phpcs.reporter('log'));
// });

// PHP Code Beautifier task
// gulp.task('phpcbf', function () {
//   return gulp.src(PATHS.phpcs)
//   .pipe($.phpcbf({
//     bin: 'wpcs/vendor/bin/phpcbf',
//     //standard: './codesniffer.ruleset.xml'
//     standard: 'PSR2',
//     warningSeverity: 0
//   }))
//   .on('error', log)
//   .pipe(gulp.dest('.'));
// });

// Start BrowserSync to preview the site in
function server(done) {
    browser.init({
        proxy: BROWSERSYNC.url,
        host: BROWSERSYNC.host,
        open: 'external',
        ui: {
            port: 8080
        },
        
    });
    done();
}

// Reload the browser with BrowserSync
function reload(done) {
    browser.reload();
    done();
}

// Watch for changes to static assets, pages, Sass, and JavaScript
function watch() {
    gulp.watch(PATHS.assets, copy);
    gulp.watch('src/scss/**/*.scss', gulp.series('scss-lint', sass))
    .on('change', path => log('File ' + colors.bold(colors.magenta(path)) + ' changed.'))
    .on('unlink', path => log('File ' + colors.bold(colors.magenta(path)) + ' was removed.'));
    gulp.watch('**/*.php', reload)
    .on('change', path => log('File ' + colors.bold(colors.magenta(path)) + ' changed.'))
    .on('unlink', path => log('File ' + colors.bold(colors.magenta(path)) + ' was removed.'));
    gulp.watch('src/images/**/*', gulp.series(images, reload));
}

// Build the "dist" folder by running all of the below tasks
gulp.task('build', gulp.series(clean, gulp.parallel('scss-lint', sass, 'webpack:build', images, copy)));

// Build the site, run the server, and watch for file changes
gulp.task('default',gulp.series('build', server, gulp.parallel('webpack:watch', watch)));

// Package task
gulp.task('package',
gulp.series('build', archive));
