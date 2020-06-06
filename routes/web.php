<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template.blank');
});

Route::get('/blank', function () {
    return view('template.blank');
});

Route::get('/data', function () {
    return view('template.data');

});

Route::get('/form', function () {
    return view('template.form');
});


// Auth Module
Route::get('/login', function () {
    return view('auth.login');

});

Route::get('/register', function () {
    return view('auth.register');

})->name('register');

Route::get('/forget_password', function () {
    return view('auth.forget_password');
});

Route::get('/exam', 'Exam\ExamController@index');
Route::get('/exam/discuss', 'Exam\ExamController@discuss');
Route::get('/exam/confirm', 'Exam\ExamController@confirm');
Route::get('/exam/score', 'Exam\ExamController@score');
Route::get('/exam/result', 'Exam\ExamController@result');
Route::get('/exam/analisa', 'Exam\ExamController@analisa');

Route::get('/exam/class', 'Exam\ExamController@class');


// Master Data
Route::get('/teacher', 'MasterData\TeacherController@index');
Route::get('/student', 'MasterData\StudentController@index');
Route::get('/subject', 'MasterData\SubjectController@index');
Route::get('/class', 'MasterData\ClassController@index');

// Question
Route::get('/exam/question', 'QuestionController@package');
Route::get('/exam/package/question', 'QuestionController@question');
Route::get('/exam/package/detail', 'QuestionController@package_detail');
Route::get('/exam/package/config', 'QuestionController@config');

Route::get('/video', 'Exam\ExamController@video');

