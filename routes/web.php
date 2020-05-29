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

// Route::get('/general_info', 'Hris\CommonController@generalInfo')->name('general_info');
// Route::get('/department', 'Hris\CommonController@listOrg')->name('org');
// Route::get('/job', 'Hris\CommonController@listJob')->name('job');
// Route::get('/employee', 'Hris\CommonController@listEmployee')->name('employee');
// Route::get('/employee/wizard', 'Hris\CommonController@createEmployee');

// // ESS Leave
// Route::get('/leave', 'Leave\LeaveController@index')->name('leave');
// Route::get('/config/kind_of_leave', 'Leave\KindOfLeaveController@index')->name('kind_of_leave');
// Route::get('/business_trip', 'BusinessTrip\BusinessTripController@index')->name('business_trip');
// Route::get('/time_off', 'TimeOff\TimeOffController@index')->name('time_off');

// // Leave Request
// Route::get('/leave/request', 'Leave\LeaveController@index');
// Route::get('/leave/request/create', 'Leave\LeaveController@create');
// // Leave Config
// Route::get('/leave/kind_of_leave', 'Leave\KindOfLeaveController@index');
// Route::get('/leave/kind_of_leave/create', 'Leave\KindOfLeaveController@create');
// Route::get('/leave/amount_of_leave', 'Leave\AmountOfLeaveController@index');
// // Business Trip Request
// Route::get('/business_trip/request', 'Business_trip\Business_trip@index');
// Route::get('/business_trip/request/create', 'Business_trip\Business_trip@create');
// // Reimburesement Request
Route::get('/reimburesement/request', 'Reimburesement\Reimburesement@index');
Route::get('/reimburesement/request/create', 'Reimburesement\Reimburesement@create');

