// 引入gulp模块
var gulp = require('gulp');

// 引入系统模块pash路径
var path = require('path');

// 引入插件
var less = require('gulp-less');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var sass=require("gulp-sass");
//引入热刷新模块
var livereload=require("gulp-livereload");


// 配置less任务
gulp.task("lessTask",function () {
    gulp.src('./src/less/*.less') //源文件
    .pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ] //调用插件的方法
    }))
    .pipe(cleanCSS()) //调用压缩插件的方法
    .pipe(rename(function (path) {
    	//path.dirname += "/ciao"; 目录名
        path.basename += ".min"; //文件名： 原来的文件名+新增的文件
        //path.extname = ".md"; 扩展名
    })) //重命名
    .pipe(gulp.dest('./dist/css/minCss')) //输出路径
    .pipe(livereload()); //开启热刷新
});
// 配置js压缩任务
gulp.task("uglifyJS",function () {
    gulp.src('./src/js/*.js') //源文件
        .pipe(uglify()) //插件方法调用
        .pipe(rename(function (path) {
            path.basename += ".min"; //文件名： 原来的文件名+新增的文件
          })) //重命名
        .pipe(gulp.dest('./dist/js')) //输出目标
        .pipe(livereload()); //开启热刷新
});
//配置一个sass任务
gulp.task("sassTask",function () {
    gulp.src('./src/scss/*.scss') //源文件
    .pipe(sass().on('error', sass.logError)) //调用sass方法编译
    .pipe(cleanCSS()) //调用压缩插件的方法
    .pipe(rename(function (path) {
        path.basename += ".min"; //文件名： 原来的文件名+新增的文件
    })) //重命名
    .pipe(gulp.dest('./dist/css/minCss')) //输出路径
    .pipe(livereload()); //开启热刷新
});
// 配置default默认任务
gulp.task("default",function () {
     //开启监听服务器
     livereload.listen();
    //监听less,js并调用对应的任务
    gulp.watch("./src/less/*.less",["lessTask"]);
    gulp.watch("./src/scss/*.scss",["sassTask"]);
    gulp.watch("./src/js/*.js",["uglifyJS"]);
})