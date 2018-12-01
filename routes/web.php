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

//from index page
Route::get('/explore', 'ExploreController@index')->name('explore');
Route::get('/profile', 'IndexController@profile')->name('profile');
Route::get('/editprofile', 'IndexController@editprofile')->name('editprofile');
Route::get('/dm', 'IndexController@dm')->name('dm');
Route::get('/author/{id}', 'IndexController@author')->name('author');
Route::get('/subject/{subject}', 'IndexController@subject')->name('subject');

//message controller
Route::post('/message', 'MessageController@store')->name('message');

//from profile page
Route::get('/assesment', 'IndexController@assesment')->name('assesment');
Route::get('/admin', 'IndexController@admin')->name('admin');
Route::get('/examination', 'ExamController@index')->name('examination');
Route::post('/filter/examinations', 'ExamController@filterExams')->name('filter.examination');
Route::get('/admindash', 'IndexController@admindash')->name('admindash');


Route::get('/teachers', 'TeacherController@teachers')->name('teachers');
Route::post('/filter/teachers', 'TeacherController@filterTeachers')->name('filter.teachers');
Route::post('/follow/teacher', 'TeacherController@followTeacher')->name('follow.teacher');
Route::post('/message/teacher', 'TeacherController@messageTeacher')->name('message.teacher');
Route::get('/recomended_subject', 'SubjectController@recomended_subject')->name('recomended_subject');
Route::get('/sidebar_subject', 'SubjectController@sidebar_subject')->name('sidebar_subject');

Route::get('/recomended_exam', 'ExamController@recomended_exam')->name('recomended_exam');
//  Route::get('/examination', 'ExamController@examination')->name('examination');

//quiz controller
Route::get('/quiz', 'QuizController@index')->name('quiz');
Route::post('/filter/quiz', 'QuizController@filter')->name('filter.quiz');
Route::get('/singlequiz', 'QuizController@singlequiz')->name('singlequiz');

//student controller
Route::get('/students', 'StudentController@students')->name('students');
Route::post('/filter/students', 'StudentController@filterStudents')->name('filter.students');
Route::post('/follow/student', 'StudentController@followStudent')->name('follow.student');
Route::post('/message/student', 'StudentController@messageStudent')->name('message.student');

//teacher dashboard
Route::middleware('role:teacher')->group(function(){
    Route::get('/teacher/teacherdash', 'TeacherController@teacherdash')->name('teacher.teacherdash');
    Route::get('/teacher/examinations', 'TeacherController@examinations')->name('teacher/examinations');
    Route::get('/teacher/notes', 'TeacherController@notes')->name('teacher/notes');
    Route::get('/teacher/payments', 'TeacherController@payments')->name('teacher/payments');
    Route::get('/teacher/results', 'TeacherController@results')->name('teacher/results');
    Route::get('/teacher/assesment', 'TeacherController@assesment')->name('teacher/assesment');
});

//student dashboard
Route::middleware('role:student')->group(function(){
    Route::get('/student/studentdash','StudentController@studentdash')->name('student.studentdash');
    Route::get('/student/examinations','StudentController@examinations')->name('student/examinations');
    Route::get('/student/notes','StudentController@notes')->name('student.notes');
    Route::post('/student/filter/notes','StudentController@filterNotes')->name('student.filter.notes');
    Route::get('/student/payments','StudentController@payments')->name('student/payments');
    Route::get('/student/results','StudentController@results')->name('student/results');
    Route::get('/student/assesment','StudentController@assesment')->name('student/assesment');
});


//admin dashboard
Route::middleware('role:superadmin')->group(function(){
    Route::get('/admin/admindash', 'AdminController@admindash')->name('admin.admindash');
    Route::get('/admin/users', 'AdminController@getAllUsers')->name('admin.users');
    Route::post('/admin/filter/users', 'AdminController@filterUsers')->name('admin.filter.users');
    Route::get('/admin/notes', 'AdminController@getAllNotes')->name('admin.notes');
    Route::get('/admin/editnotes', 'AdminController@editNotes')->name('admin.editnotes');
    Route::post('/admin/filter/notes', 'AdminController@filterNotes')->name('admin.filter.notes');
    Route::get('/admin/topics', 'AdminController@getAllTopics')->name('admin.topics');
    Route::get('/admin/examinations', 'AdminController@getAllExaminations')->name('admin.examinations');
    Route::post('/admin/filter/examinations', 'AdminController@filterExams')->name('admin.filter.examinations');
    Route::get('/admin/quizzes', 'AdminController@getAllQuizzes')->name('admin.quizzes');
    Route::post('/admin/filter/quizzes', 'AdminController@filterQuizzes')->name('admin.filter.quizzes');
    Route::post('/admin/delete/quizzes', 'AdminController@deleteQuiz')->name('admin.delete.quiz');
    Route::get('/admin/results', 'AdminController@getAllResults')->name('admin.results');
    Route::post('/admin/filter/results', 'AdminController@filterResults')->name('admin.filter.results');
    Route::get('/admin/awards', 'AdminController@getAllAwards')->name('admin.awards');
    Route::post('/admin/filter/awards', 'AdminController@filterAwards')->name('admin.filter.awards');
    Route::get('/admin/advertisements', 'AdminController@advertisements')->name('admin/advertisements');
    Route::get('/admin/payments', 'AdminController@getAllPayments')->name('admin.payments');
    Route::post('/admin/filter/payments', 'AdminController@filterpayments')->name('admin.filter.payments');
    Route::get('/admin/violations', 'AdminController@getAllViolations')->name('admin.violations');
    Route::get('/admin/role_permission', 'AdminController@role_permission')->name('admin.role_permission');
    Route::post('/admin/addpermission', 'AdminController@addPermission')->name('admin.addpermission');
    Route::post('/admin/addrole', 'AdminController@addRole')->name('admin.addrole');
});

//from subject page
Route::get('/class/{subject}/{class}', 'SubjectController@class')->name('class');
Route::get('/assessment/{id}', 'SubjectController@assessment')->name('assessment');
Route::get('/single/{id}', 'SubjectController@single')->name('single');

//author page
Route::get('/follow/{id}','IndexController@follow')->name('follow');
