// require gulp to work with it
var gulp = require('gulp');

// require sass
var sass = require('gulp-sass');

// require gulp useref
var useref = require('gulp-useref');

// require uglify uses to uglify js files
var uglify = require('gulp-uglify');

// require gulp if
var gulpIf = require('gulp-if');

// require css nano to uglify css
var cssnano = require('gulp-cssnano');

// require imagemin
var imagemin = require('gulp-imagemin');

// require cache
var cache = require('gulp-cache');

// require del
var del = require('del');

var runSequence = require('run-sequence');

// Basic Gulp task syntax
gulp.task('hello', function() {
  console.log('Hello Yawuar!');
})

// task to convert sass to css 
gulp.task('sass', function() {
	return gulp.src('app/scss/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('app/css'));
});

gulp.task('watch', function() {
	gulp.watch('app/scss/**/*.scss', ['sass']);
});

// Optimization Tasks 
// ------------------

// used to places all the files, uglified in a dist folder
// gulp.task('useref', function(){
//   return gulp.src('app/**/*')
//     .pipe(useref())
//     .pipe(gulpIf('*.+(png|jpg|jpeg|gif|svg)', cache(imagemin({
//       interlaced: true
//     }))))
//     // uglify js
//     .pipe(gulpIf('*.js', uglify()))
//     // uglify css files
//     .pipe(gulpIf('*.css', cssnano()))
//     //destination folder dist
//     .pipe(gulp.dest('dist'))
// });

// task to minify js
gulp.task('uglify', function () {
  return gulp.src('app/js/*.js')
    // uglify js
    .pipe(gulpIf('*.js', uglify()))
    //destination folder dist
    .pipe(gulp.dest('dist/js'))
});

// task to minify js
gulp.task('cssnano', function () {
  return gulp.src('app/css/*.css')
    // uglify js
    .pipe(gulpIf('*.css', cssnano()))
    //destination folder dist
    .pipe(gulp.dest('dist/css'))
});

gulp.task('images', function(){
  return gulp.src('app/images/**/*.+(png|jpg|jpeg|gif|svg)')
  .pipe(
  	cache(imagemin({
  		interlaced: true
  	}))
  )
  .pipe(gulp.dest('dist/images'))
});

// put includes into dist folder
gulp.task('includes', function () {
  gulp.src('app/includes/*.php').pipe(gulp.dest('dist/includes'));
  gulp.src('app/favicons/*.+(png|jpg|jpeg|gif|svg)').pipe(gulp.dest('dist/favicons'));
  gulp.src('app/pages/*.php').pipe(gulp.dest('dist/pages'));
  gulp.src('app/*.php').pipe(gulp.dest('dist'));
});
// Cleaning 
gulp.task('clean', function() {
  return del.sync('dist').then(function(cb) {
    return cache.clearAll(cb);
  });
})

gulp.task('clean', function() {
  return del.sync('dist');
});

gulp.task('clean:dist', function() {
  return del.sync(['dist/**/*', '!dist/images', '!dist/images/**/*']);
});

// Build Sequences
// ---------------

gulp.task('default', function(callback) {
  runSequence(
  	['sass'], 'watch',
    callback
  )
})

gulp.task('build', function (callback){
	runSequence(
		'clean:dist', 
    	'sass', 
    ['images', 'uglify', 'cssnano', 'includes'],
    	callback
  	);
});