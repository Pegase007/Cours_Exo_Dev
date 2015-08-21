var gulp      = require('gulp'),
minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify'), // Minification des CSS
concat = require('gulp-concat'),
imagemin  = require('gulp-imagemin'),
uncss = require('gulp-uncss'),
sass      = require('gulp-sass'),
 coffee = require('gulp-coffee');

pngquant = require('imagemin-pngquant');
 // var gulp = require('gulp');
 //  var zip = require('gulp-zip');


gulp.task('copier', function () {
    console.log('copy...:)');
    return gulp.src('img/*.png')
            .pipe(gulp.dest('imgfinal/'));
});

gulp.task('copierPDF', function () {
    console.log('copy...:)');
    return gulp.src('download/*.pdf')
            .pipe(gulp.dest('web/'));
});

gulp.task('css', function() 
{
    return gulp.src(['./css/*.css', './stylesheets/*.css'])    // Prend en entrée les 
		.pipe(concat('all.css'))
    .pipe(minifyCss()) 
    .pipe(gulp.dest('./dist/'));  // Sauvegarde le tout dans /src/style
  
});

gulp.task('js', function() 
{
    return gulp.src(['./js/*.js', './stylesheets/*.js'])    // Prend en entrée les 
		.pipe(concat('all.js'))
    .pipe(minifyJs()) 
    .pipe(gulp.dest('./dist/'));  // Sauvegarde le tout dans /src/dist
  
});
gulp.task('compress', function() 
{
    return gulp.src('./slider/js/*.js')    // Prend en entrée les 
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./distjs/'));  // Sauvegarde le tout dans /src/distjs
  
});

gulp.task('watch', function() 
{
   //gulp.watch(['./css/*.css'], ['css']);
   gulp.watch(['./*.sass'], ['sass']);
   //gulp.watch(['./slider/js/*.js'], ['js']);
   //gulp.watch(['./img/*.png'], ['copier']);

});

gulp.task('default', ['watch']);


gulp.task('images', function () {
    return gulp.src('img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('dist/images'));
});

gulp.task('css', function() 
{
    return gulp.src(['./css/*.css', './stylesheets/*.css'])    // Prend en entrée les 
		.pipe(concat('all.css'))
    .pipe(uncss({
          html: ['index.html']
      }))
    .pipe(minifyCss()) 
    .pipe(gulp.dest('./dist/'));  // Sauvegarde le tout dans /src/style
  
});

 gulp.task('zip', function () {
      return gulp.src('src/*')
          .pipe(zip('archive.zip'))
          .pipe(gulp.dest('dist'));
  });


gulp.task('sass', function() 
{

  return gulp.src(['*.sass'])    // Prend en entrée les 
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('sas.css'))
    .pipe(uncss({
          html: ['index.html']
      }))
    //.pipe(minifyCss())
    .pipe(gulp.dest('./dist/'));  // Sauvegarde le tout dans /src/style
});

gulp.task('coffee', function() {
  gulp.src('./js/*.coffee')
    .pipe(coffee({bare: true}))
    .pipe(gulp.dest('./dist/'))
});