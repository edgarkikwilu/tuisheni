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

Route::get('/', 'IndexController@index')->name('index');
//Route::get('/index', 'IndexController@index')->name('index');

Route::post('/login', 'LoginController@login')->name('login');
Route::post('/register', 'RegisterController@register')->name('register');

Auth::routes();
//Route::post('register', 'RegisterController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard/teacher', 'TeacherController@index')->name('teacher.dashboard');


//from index page
Route::get('/explore', 'ExploreController@index')->name('explore');
Route::get('/profile', 'IndexController@profile')->name('profile');
Route::get('/single', 'IndexController@single')->name('single');
Route::get('/editprofile', 'IndexController@editprofile')->name('editprofile');
Route::get('/dm', 'IndexController@dm')->name('dm');
Route::get('/author/{id}', 'IndexController@author')->name('author');
Route::get('/subject/{subject}', 'IndexController@subject')->name('subject');

//from profile page


Route::get('/teachers', 'IndexController@teachers')->name('teachers');
Route::get('/students', 'IndexController@students')->name('students');
Route::get('/studentdash', 'IndexController@studentdash')->name('studentdash');
Route::get('/dashboard', 'IndexController@dashboard')->name('dashboard');
//Route::get('/examination', 'IndexController@examination')->name('examination');
Route::get('/quiz', 'IndexController@quiz')->name('quiz');
Route::get('/recomended_subject', 'SubjectController@recomended_subject')->name('recomended_subject');

Route::get('/recomended_exam', 'ExamController@recomended_exam')->name('recomended_exam');
Route::get('/examination', 'ExamController@examination')->name('examination');

//teacher dashboard
Route::get('/teacher/teacherdash', 'TeacherController@teacherdash')->name('teacher/teacherdash');
Route::get('/teacher/examinations', 'TeacherController@examinations')->name('teacher/examinations');
Route::get('/teacher/notes', 'TeacherController@notes')->name('teacher/notes');
Route::get('/teacher/payments', 'TeacherController@payments')->name('teacher/payments');
Route::get('/teacher/results', 'TeacherController@results')->name('teacher/results');
Route::get('/teacher/assesment', 'TeacherController@assesment')->name('teacher/assesment');

//student dashboard
Route::get('/student/studentdash', 'StudentController@studentdash')->name('student/studentdash');
Route::get('/student/examinations', 'StudentController@examinations')->name('student/examinations');
Route::get('/student/notes', 'StudentController@notes')->name('student/notes');
Route::get('/student/payments', 'StudentController@payments')->name('student/payments');
Route::get('/student/results', 'StudentController@results')->name('student/results');
Route::get('/student/assesment', 'StudentController@assesment')->name('student/assesment');


//admin dashboard
Route::get('/admin/admindash', 'AdminController@admindash')->name('admin/admindash');
Route::get('/admin/users', 'AdminController@users')->name('admin/users');
Route::get('/admin/notes', 'AdminController@notes')->name('admin/notes');
Route::get('/admin/topics', 'AdminController@topics')->name('admin/topics');
Route::get('/admin/examinations', 'AdminController@examinations')->name('admin/examinations');
Route::get('/admin/quizzes', 'AdminController@quizzes')->name('admin/quizzes');
Route::get('/admin/results', 'AdminController@results')->name('admin/results');
Route::get('/admin/awards', 'AdminController@awards')->name('admin/awards');
Route::get('/admin/advertisements', 'AdminController@advertisements')->name('admin/advertisements');
Route::get('/admin/payments', 'AdminController@payments')->name('admin/payments');
Route::get('/admin/violations', 'AdminController@violations')->name('admin/violations');

//from subject page
Route::get('/class/{subject}/{class}', 'SubjectController@class')->name('class');
Route::get('/assessment/{id}', 'SubjectController@assessment')->name('assessment');

//author page
Route::get('/follow/{id}','IndexController@follow')->name('follow');
