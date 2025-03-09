const { src, dest, parallel, series, watch } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const pug = require('gulp-pug');

// Move JS files to "dist/js" folder
function js() {
    return src([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        'node_modules/owl.carousel/dist/owl.carousel.min.js',
        'node_modules/jquery-waypoints/waypoints.min.js',
        'node_modules/counterup/jquery.counterup.min.js',
        'node_modules/jquery.easing/jquery.easing.min.js',
        'node_modules/jquery-countdown/dist/jquery.countdown.min.js',
        'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js'
    ])
        .pipe(dest('dist/js'));
}

// Move CSS files to "dist/css" folder
function css() {
    return src([
      'node_modules/font-awesome/css/font-awesome.min.css',
      'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
      'node_modules/wowjs/css/libs/animate.css',
      'node_modules/magnific-popup/dist/magnific-popup.css'
    ])
        .pipe(dest('dist/css'));
}

// Move Font Awesome fonts files to "dist/fonts" folder
function fafonts() {
    return src('node_modules/font-awesome/fonts/*')
        .pipe(dest('dist/fonts'));
}

// Move static CSS files to "dist/css" folder
function staticCSS() {
    return src('static/css/*')
        .pipe(dest('dist/css'));
}

// Move static Fonts files to "dist/fonts" folder
function staticFonts() {
    return src('static/fonts/*')
        .pipe(dest('dist/fonts'));
}

// Move static Images to "dist/img" folder
function staticImage() {
    return src('static/img/*/*')
        .pipe(dest('dist/img'));
}

// Move static JS files to "dist/js" folder
function staticJS() {
    return src('static/js/*')
        .pipe(dest('dist/js'));
}

// Move static Common files to "dist/" folder
function staticCommon() {
    return src('static/*')
        .pipe(dest('dist'));
}

// CSS Autoprefixer
function cssAutoprefixer() {
    return src('node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(postcss([ autoprefixer( {overrideBrowserslist: ['last 2 versions']} )]))
        .pipe(dest('dist/css/'))
}

// SCSS to CSS Convert
function sassToCss() {
    return src('src/scss/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([ autoprefixer( {overrideBrowserslist: ['last 2 versions']} )]))
        .pipe(dest('dist/'))
}

// Pug to HTML Convert
function pugToHtml() {
    return src('src/pug/*.pug')
        .pipe(pug({pretty: true}))
        .pipe(dest('dist/'));
}

// Watching
function watching() {
    watch('static/css/*', series(staticCSS));
    watch('static/fonts/*', series(staticFonts));
    watch('static/img/*/*', series(staticImage));
    watch('static/js/*', series(staticJS));
    watch('static/*', series(staticCommon));
    watch('src/scss/*.scss', series(sassToCss));
    watch(['src/pug/*.pug', 'src/pug/inc/*.pug'], series(pugToHtml));
}

const watchingAll = parallel(watching);

// exports
exports.watch = watchingAll;
exports.default = series(js, css, fafonts, staticCSS, staticFonts, staticImage, staticJS, staticCommon, cssAutoprefixer, sassToCss, pugToHtml, watching);