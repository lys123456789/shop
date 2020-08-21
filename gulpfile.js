// 引入gulp
const gulp = require('gulp');
// 引入sass
const sass = require('gulp-sass');
// 引入watch
const watch = require('gulp-watch');

// 编译scss成css
gulp.task('sass', (done) => {
    gulp.src('./scss/*.scss').pipe(sass()).pipe(gulp.dest('./css'));
    done();
});

// 监听scss
gulp.task('watch-sass',(done)=>{
    watch('./scss/*.scss',gulp.parallel('sass'));
    done();
});



