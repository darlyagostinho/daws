const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const gulpSass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify-es').default;
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const del = require('del');
const theme = 'daws';
const zip = require('gulp-zip');

function clean(){
  return del('./dist/**/*');
}

function zipFile(){
  return gulp.src(`./dist/${theme}/**/*.*`)
    .pipe(zip(`${theme}.zip`))
    .pipe(gulp.dest('./../'))
}

function wordpress(){
  return gulp.src(['./**/*.php', './screenshot.png'])
    .pipe(gulp.dest(`./dist/${theme}`));
}

function sass() {
  return gulp.src('./sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(gulpSass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
}

function generateCss() {
  return gulp.src('./sass/style.scss')
    .pipe(gulpSass())
    .pipe(gulp.dest('./'))
}

function css() {
  return gulp.src('./assets/css/**/*')
      .pipe(gulp.dest(`./dist/${theme}/assets/css`));
}

function cssminify() {
  return gulp.src('./sass/style.scss')
      .pipe(gulpSass().on("error", gulpSass.logError))
      .pipe(gulp.dest(`./dist/${theme}`))
      .pipe(postcss([ autoprefixer(), cssnano() ]))
      .pipe(gulp.dest(`./dist/${theme}`));
}

function jsVendor() {
  return gulp.src('./assets/js/vendor/*.js')
      .pipe(gulp.dest(`./dist/${theme}/assets/js/vendor`));
}

function jsUglifyNav() {
  return gulp.src('./assets/js/nav.js')
    .pipe(uglify())
    .pipe(gulp.dest(`./dist/${theme}/assets/js`));
}

function browser() {
  browserSync.init({
    proxy: `http://localhost/${theme}/`
  });
}

function watchFiles(){
  gulp.watch('./**/*.scss', sass);
  gulp.watch('./*.html').on('change', browserSync.reload);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./**/*.js').on('change', sass);
  gulp.watch('./**/*.js').on('change', browserSync.reload);
}

exports.default = gulp.series(generateCss, gulp.parallel(browser, watchFiles));   
exports.generateCss = gulp.series(generateCss);
exports.watch = watchFiles;
exports.cssminify = cssminify;
exports.browser = browser;
exports.prod = gulp.series(clean, generateCss, cssminify, css, gulp.parallel(jsUglifyNav, jsVendor), wordpress, zipFile);
exports.jsVendor = jsVendor;