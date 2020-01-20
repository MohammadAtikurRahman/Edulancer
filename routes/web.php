<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
Route::get('/edulancer', function () {
    return view('admin.edulancer');
});


Route::get('/reg_for_teacher', function () {
    return view('admin.reg_for_teacher');
});

Route::get('/reg_teacher', function () {
    return view('admin.reg_teacher');
});
// Route::get('/test', function () {
//     return view('admin.test');
// });


//admin to login from data base
Route::post('/adminlogin','AdminController@login_dashboard');
//;;;;;;;;;;;;;;;;

Route::post('/techerlogincheck','Verify_loginController@logincheckfromdatabase');

//;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
Route::post('/student_reg','Student_loginController@login_dashboard_for_student');

Route::post('/loginforteacher','Teacher_loginController@login_dashboard_for_teacher');




Route::post('/reg_login','AdminController@reg_dashboard');

Route::get('/logout','AdminController@logout');


Route::get('/admin_dashboard','AdminController@admin_dashboard');


Route::get('/view','AdminController@view');

Route::get('/settings','AdminController@settings');

//..................................................................

 Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//........................................................................
//add student


Route::get('/post','PostController@post_ad');
Route::get('/alluser','AlluserController@alluser');
 

Route::get('/registration','RegistrationController@registration');



Route::post('/post_somethings','PostController@post_somethings');



Route::post('/registration','RegistrationController@registration_booth');