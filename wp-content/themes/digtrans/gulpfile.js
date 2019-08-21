'use strict';

var env, proxyurl;

var gulp = require('gulp'),
    util = require( 'gulp-util' ),
    gulpif = require( 'gulp-if' ),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    watch = require('gulp-watch'),
    fs = require( 'file-system' ),         // Tools for filesystem usage
    wait = require( 'gulp-wait' ),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    rimraf      = require( 'rimraf' ),
    minifyJs = require('gulp-uglify'),
    babel = require('gulp-babel'),
    postCss = require('gulp-postcss'),
    sass = require('gulp-sass'),
    autoprefixer = require('autoprefixer'),
    minifyCss = require('cssnano'),
    mediaGroup = require('css-mqpacker'),
    cssNew = require('postcss-preset-env'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

if( fs.existsSync( './gulpenv.js' ) ){
    env = require( './gulpenv' );
} else {
    env = {
        proxyurl: 'digtrans'
    }
}

proxyurl = env.proxyurl;

var path = {
    build: {
        js:         './js/',
        styles:     './styles/',
        img:        './images/',
        fonts:      './fonts/'
    },
    src: {
        js:         './assets/src/js/*.js',
        styles:     './assets/src/styles/*.scss',
        img:        './assets/src/images/*.*',
        fonts:      './assets/src/fonts/*.*'
    },
    watch: {
        js:         './assets/src/js/*.js',
        img:        './assets/src/images/*.*',
        styles:      './assets/src/styles/**/*.scss',
        fonts:      './assets/src/fonts/*.*',
        php:    [
            './*.php',
            './inc/**/*.php',
            './parts/**/*.php',
            './templates/**/*.php'
        ]
    },
    clean:    './assets/build'
};


var config = {};

if( util.env.production !== true ){
    config = {
        logPrefix:  "EGO Devil",
        proxy:      env.proxyurl
    };
} else {
    config = {
        server: {
            base: '/'
        }
    }
}

gulp.task('timestamp:build', () => {
    if( util.env.production !== true ){
        fs.writeFile('./timestamp.txt', Date.now(), error => {});
    }
});

gulp.task('js:build', function() {
    return gulp.src(path.src.js)
        .pipe(wait(500))
        .pipe(gulpif(!util.env.production, sourcemaps.init()))
        .pipe(plumber({
            errorHandler : notify.onError(function (err) {
                return {
                    title: 'JS',
                    message: err.message
                }
            })
        }))
        .pipe(babel({presets: ['env']}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulpif(!util.env.production, sourcemaps.write()))
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({ stream: true }));
});

gulp.task('styles:build', () => {
    var plugins = [
        autoprefixer,
        mediaGroup({
            sort: true
        }),
        cssNew
    ];
    return gulp.src(path.src.styles)
        .pipe(wait(200))
        .pipe(gulpif(!util.env.production, sourcemaps.init()))
        .pipe(plumber({
            errorHandler : notify.onError(function (err) {
                return {
                    title: 'STYLE',
                    message: err.message
                }
            })
        }))
        .pipe(sass())
        .pipe(postCss(plugins))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulpif(!util.env.production, sourcemaps.write()))
        .pipe(gulp.dest( path.build.styles ))
        .pipe(reload({ stream: true }));
});

gulp.task('images:build', function() {
    return gulp.src(path.src.img)
        .pipe(gulpif(util.env.production, imagemin().on('error', notify.onError())))
        .pipe(gulp.dest(path.build.img))
        .pipe(reload({ stream: true }));
});

gulp.task('fonts:build', function() {
    return gulp.src(path.src.fonts)
        .pipe(plumber({
            errorHandler : notify.onError(function (err) {
                return {
                    title: 'FONTS',
                    message: err.message
                }
            })
        }))
        .pipe(gulp.dest(path.build.fonts));
});

gulp.task('php:build', () => { reload() });

gulp.task('build', ['js:build','styles:build','images:build','fonts:build']);

gulp.task('watch', () => {
    watch([path.watch.styles],        () => { gulp.start('styles:build') } );
    watch([path.watch.js],          () => { gulp.start('js:build') } );
    watch([path.watch.img],         () => { gulp.start('images:build') } );
    watch([path.watch.fonts],       () => { gulp.start('fonts:build') } );
    watch(path.watch.php,           () => { gulp.start('php:build') } );
});

gulp.task('webserver', () => browserSync(config));

gulp.task('clean', cd => rimraf(path.clean, cd));

gulp.task('serve', ['build', 'webserver', 'watch']);