/*
 * GULP CONFIG
 *
 * Desciption:  Clean gulpfile for web development workflow with browsersync, compiling/optimization of sass, javascript and images from assets to dist
 * Usage:       gulp (to run the whole process), gulp watch (to watch for changes and compile if anything was modified)
 *
 * Author:      Flurin Dürst (https://flurinduerst.ch)
 *
 * Version:     1.3.1
 *
*/


/* SETTINGS
/===================================================== */
var browsersync_proxy = "wpseed.dev";


/* DEPENDENCIES
/===================================================== */
// general
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var rename = require("gulp-rename");

// css
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');

// js
var uglify = require('gulp-uglify');

// images
var imagemin = require('gulp-imagemin');

// error handling with notify & plumber
var notify = require("gulp-notify");
var plumber = require('gulp-plumber');

// watch
var watch = require('gulp-watch');

// delete
var del = require('del');

var paths = {
    vendorScripts: [
      
      // specify your vendor scripts in dependency order
      'bower_components/modernizr/modernizr.js',
      // 'bower_components/jquery/dist/jquery.js',

      // Bootstrap JS files
      // 'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/affix.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/alert.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/button.js',
      // 'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/carousel.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/dropdown.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/tab.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js',
      // 'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/scrollspy.js',
      'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js',
      // 'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/tooltip.js',
      // 'bower_components/twbs-bootstrap-sass/vendor/assets/javascripts/bootstrap/popover.js',

      // Flexslider things for video
      'bower_components/FlexSlider/jquery.flexslider.js',

      // Misc Vendor Libraries
      'bower_components/jquery.easing/js/jquery.easing.js',

      // WOW depends on animate.css - animate asset loading
      'bower_components/wow/dist/wow.js',

      // Isotope Grid
      'bower_components/isotope/dist/isotope.pkgd.min.js',

      // Magnificent popups
      'bower_components/magnific-popup/dist/jquery.magnific-popup.js',

    ],
    appScripts: [
      // You can keep your JS tidy in its own file for a specific feature.
      // Nothing's important about the naming scheme, just as long as the file
      // is included in this array, it'll come together.
        'assets/scripts/main.js'
    ],
    styles: [
      // do your @imports from this file, not the gulpfile
      'assets/stylesheets/main.scss'
    ],
    stylesWatchDir: 'assets/stylesheets/**/*.scss',
    images: ['assets/images/**']
  };


/* TASKS
/===================================================== */

/* BROWSERSYNC
/------------------------*/
// initialize Browser Sync
gulp.task('browsersync', function() {
  browserSync.init({
    proxy: browsersync_proxy,
    notify: false,
    open: false,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });
});

/* CSS
/------------------------*/
// from:    assets/styles/main.css
// actions: compile, minify, prefix, rename
// to:      dist/style.min.css
gulp.task('css', function() {
  gulp.src('assets/styles/main.scss')
  .pipe(plumber({errorHandler: notify.onError("<%= error.message %>")}))
  .pipe(sass())
  .pipe(autoprefixer('last 2 version', { cascade: false }))
  .pipe(cleanCSS())
  .pipe(rename('dist/style.min.css'))
  .pipe(gulp.dest('./'))
  .pipe(browserSync.stream());
});


/* VENDORS
/------------------------*/
gulp.task('vendor', function(){
    return gulp.src(paths.vendorScripts)
      .pipe(plumber({errorHandler: notify.onError("<%= error.message %>")}))
      .pipe(concat('vendor.min.js'))
      .pipe(gulp.dest('dist/'))
      .pipe(uglify())
      .pipe(rename('vendor.min.js'))
      .pipe(gulp.dest('dist/'))
  });


/* JAVASCRIPT
/------------------------*/
// from:    assets/scripts/
// actions: concatinate, minify, rename
// to:      dist/script.min.css
gulp.task('javascript', function() {
  gulp.src('assets/scripts/*.js')
  .pipe(plumber({errorHandler: notify.onError("<%= error.message %>")}))
  .pipe(concat('script.min.js'))
  .pipe(uglify())
  .pipe(rename('dist/script.min.js'))
  .pipe(gulp.dest('./'))
  .pipe(browserSync.stream());
});

/* IMAGES
/------------------------*/
// from:    assets/images/
// actions: minify, rename
// to:      dist/images
gulp.task('images',  function() {
  gulp.src('assets/images/**')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/images'))
    .pipe(browserSync.stream());
});

/* CLEAN
/------------------------*/
// empty dist folder
gulp.task('clean', require('del').bind(null, ['dist/**']));

/* WATCH
/------------------------*/
// watch for modifications in
// styles, scripts, images, php files, html files
gulp.task('watch',  ['browsersync'], function() {
  gulp.watch('assets/styles/*.scss', ['css']);
  gulp.watch('assets/scripts/*.js', ['javascript']);
  gulp.watch('assets/images/**', ['images']);
  gulp.watch('*.php', browserSync.reload);
  gulp.watch('*.html', browserSync.reload);
});

/* DEFAULT
/------------------------*/
// default gulp tasks executed with `gulp`
gulp.task('default', ['clean', 'css', 'vendor', 'javascript', 'images', 'watch']);
