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
    return view('auth.login');
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

Route::get('/video', 'Exam\ExamController@video');

