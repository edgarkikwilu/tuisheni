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
// Route::get('/teacher/dashboard', function(){
//     return view('teacher/dashboard');
// })->name('index');
//Route::get('/index', 'IndexController@index')->name('index');

Route::post('/login', 'LoginController@login')->name('login');
Route::post('/register', 'RegisterController@register')->name('register');

Auth::routes();
//Route::post('register', 'RegisterController@register')->name('register');

//Route::get('/home', 'HomeController@index')->name('home');

//from index page
Route::get('/explore', 'ExploreController@index')->name('explore');
Route::post('/explore/filter/notes', 'ExploreController@filterNotes')->name('explore.filter.notes');
Route::get('/profile', 'IndexController@profile')->name('profile');
Route::get('/editprofile', 'IndexController@editprofile')->name('editprofile');
Route::get('/dm', 'IndexController@dm')->name('dm');
Route::get('/author/{id}', 'IndexController@author')->name('author');
Route::get('/subject/{subject}', 'IndexController@subject')->name('subject');
Route::get('/results', 'IndexController@results')->name('results');

Route::get('/attachment/delete/{attachment}/{notes}', 'AttachmentController@deleteAttachments')->name('attachment.delete');

//message controller
Route::post('/message', 'MessageController@store')->name('message');
Route::post('/read/message', 'MessageController@read')->name('read.message');

//comment controller
Route::post('/comment', 'CommentController@store')->name('comment');

//from profile page
Route::get('/assesment', 'IndexController@assesment')->name('assesment');
Route::get('/admin', 'IndexController@admin')->name('admin');
Route::get('/admindash', 'IndexController@admindash')->name('admindash');


Route::get('/teachers', 'TeacherController@teachers')->name('teachers');
Route::post('/filter/teachers', 'TeacherController@filterTeachers')->name('filter.teachers');
Route::get('/follow/teacher/{id}', 'TeacherController@followTeacher')->name('follow.teacher');
Route::post('/message/teacher', 'TeacherController@messageTeacher')->name('message.teacher');
Route::get('/recomended_subject', 'SubjectController@recomended_subject')->name('recomended_subject');
Route::get('/sidebar_subject', 'SubjectController@sidebar_subject')->name('sidebar_subject');

//examination
Route::get('/recomended_exam', 'ExamController@recomended_exam')->name('recomended_exam');
Route::get('/examination/examination', 'ExamController@index')->name('examination.examination');
Route::get('/examination/single_exam/{id}', 'ExamController@single_exam')->name('examination.single_exam');
Route::post('/filter/examination/examination', 'ExamController@filterExams')->name('filter.examination.examination');

//quiz controller
Route::get('/quiz/quiz', 'QuizController@index')->name('quiz.quiz');
Route::get('/quiz/singlequiz', 'QuizController@getSingleQuiz')->name('quiz.singlequiz');
Route::post('/filter/quiz/quiz', 'QuizController@filter')->name('filter.quiz.quiz');
Route::get('/attempt/quiz/quiz/{id}', 'QuizController@attempt')->name('attempt.quiz.quiz');
//Route::get('/quiz/singlequiz', 'QuizController@singlequiz')->name('quiz.singlequiz');

//student controller
Route::get('/students', 'StudentController@students')->name('students');
Route::post('/filter/students', 'StudentController@filterStudents')->name('filter.students');
Route::post('/follow/student', 'StudentController@followStudent')->name('follow.student');
Route::post('/message/student', 'StudentController@messageStudent')->name('message.student');

//teacher dashboard
Route::middleware('role:teacher')->group(function(){
    Route::get('/teacher/teacherdash','TeacherController@teacherdash')->name('teacher.teacherdash');
    Route::get('/teacher/profile','TeacherController@profile')->name('teacher.profile');

    Route::get('/teacher/chart/data', 'TeacherController@getChartData')->name('teacher.chart.data');
    
    Route::get('/teacher/quiz', 'TeacherController@quiz')->name('teacher.quiz');
    
    Route::get('/teacher/points', 'TeacherController@points')->name('teacher.points');
    Route::get('/teacher/topdash', 'TeacherController@topdash')->name('teacher.topdash');
    // Route::get('/teacher/teacherdash', 'TeacherController@teacherdash')->name('teacher.teacherdash');
    Route::get('/teacher/examinations', 'TeacherController@examinations')->name('teacher.examinations');
    Route::get('/teacher/single_exam/{id}', 'TeacherController@single_exam')->name('teacher.single_exam');
    Route::get('/teacher/notes', 'TeacherController@notes')->name('teacher.notes');
    Route::post('/teacher/filter/notes', 'TeacherController@filterNotes')->name('teacher.filter.notes');
    Route::get('/teacher/createnotes','TeacherController@createNotes')->name('teacher.createnotes');
    Route::get('/teacher/show/notes/{id}', 'NotesController@showNotes')->name('teacher.show.notes');
    Route::post('/teacher/store/notes','NotesController@storeNotes')->name('teacher.store.notes');
    Route::get('/teacher/edit/notes/{id}', 'NotesController@editNotes')->name('teacher.edit.notes');
    Route::post('/teacher/update/notes','NotesController@updateNotes')->name('teacher.update.notes');
    Route::post('/teacher/delete/notes/{id}', 'NotesController@deleteNotes')->name('teacher.delete.notes');

    Route::post('/filter/points', 'PointController@filter')->name('filter.points');

    Route::get('/teacher/payments', 'TeacherController@payments')->name('teacher.payments');
    Route::post('/teacher/filter/payments', 'TeacherController@filterpayments')->name('teacher.filter.payments');
    Route::get('/teacher/results', 'TeacherController@getAllResults')->name('teacher.results');
    Route::post('/teacher/filter/results', 'TeacherController@filterResults')->name('teacher.filter.results');
    Route::get('/teacher/assesment', 'TeacherController@assesment')->name('teacher/assesment');
    Route::post('/teacher/filter/examinations', 'TeacherController@filterExams')->name('teacher.filter.examinations');
    Route::get('/teacher/create/examination', 'TeacherController@createExam')->name('teacher.create.exam');
    Route::post('/teacher/give/marks', 'TeacherController@giveMarks')->name('teacher.give.marks');
    Route::post('/teacher/store/examination', 'TeacherController@storeExam')->name('teacher.store.examination');
    Route::post('/teacher/delete/examination', 'TeacherController@deleteExam')->name('teacher.delete.examination');

    Route::get('/teacher/createquiz', 'TeacherController@createquiz')->name('teacher.createquiz');
    Route::post('/teacher/store/quiz', 'TeacherController@storeQuiz')->name('teacher.store.quiz');
    Route::post('/teacher/delete/quiz', 'TeacherController@
    ')->name('teacher.delete.quiz');

});

Route::get('/test','StudentController@getAverageScore')->name('test');

//student dashboard
Route::middleware('role:student')->group(function(){
    Route::get('/student/studentdash','StudentController@studentdash')->name('student.studentdash');
    Route::get('/student/profile','StudentController@profile')->name('student.profile');
    Route::post('/student/edit/profile','StudentController@editProfile')->name('student.edit.profile');
    Route::get('/student/chart/data', 'StudentController@getChartData')->name('student.chart.data');

    Route::get('/student/examinations','StudentController@examinations')->name('student.examinations');
    Route::post('/student/filter/examinations', 'StudentController@filterExams')->name('student.filter.examinations');
    Route::post('/student/submit/examinations', 'AnswerController@store')->name('student.submit.exam');

    Route::get('/student/notes','StudentController@notes')->name('student.notes');
    Route::get('/student/createnotes','StudentController@createnotes')->name('student.createnotes');
    Route::post('/student/store/notes','NotesController@store')->name('student.store.notes');
    Route::post('/student/filter/notes','StudentController@filterNotes')->name('student.filter.notes');
    Route::post('/student/delete/notes', 'NotesController@deleteNotes')->name('student.delete.notes');

    Route::get('/student/payments','StudentController@payments')->name('student.payments');
    Route::post('/student/filter/payments', 'StudentController@filterPayments')->name('student.filter.payments');

    Route::get('/student/points', 'PointController@studentPoints')->name('student.points');
    Route::post('/student/filter/points', 'PointController@filter')->name('student.filter.points');

    Route::get('/student/quiz','StudentController@quiz')->name('student.quiz');
    Route::post('/check/quiz/answers', 'StudentController@checkQuizAnswers')->name('quiz.check.answers');

    Route::get('/student/results','StudentController@results')->name('student.results');

    Route::get('/student/assesment','StudentController@assesment')->name('student.assesment');
    Route::post('/student/filter/assessment', 'StudentController@filterAssessment')->name('student.filter.assessment');
});
Route::get('/student/gettopics/{id}','StudentController@getTopics')->name('student.gettopics');
Route::get('/student/getsubtopics/{id}','StudentController@getSubTopics')->name('student.getsubtopics');
Route::get('/student/show/notes/{filename}','NotesController@show')->name('student.show');
Route::get('/student/show/{filename}','ExamController@show')->name('student.show.exam');

Route::get('/show/exam/{filename}','ExamAttachmentController@show')->name('show.exam');
Route::get('/show/marking/scheme/{filename}','MarkingSchemeController@show')->name('show.marking.scheme');
Route::get('/show/answer/sheet/{filename}','AnswerSheetController@show')->name('show.marking.scheme');


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

    Route::get('/admin/violations', 'ViolationController@index')->name('admin.violations');
    Route::get('/admin/role_permission', 'AdminController@role_permission')->name('admin.role_permission');
    Route::post('/admin/addpermission', 'AdminController@addPermission')->name('admin.addpermission');
    Route::post('/admin/addrole', 'AdminController@addRole')->name('admin.addrole');

    Route::get('/admin/variables', 'AdminController@getAllVariables')->name('admin.variables');
    Route::post('/admin/store/variable', 'AdminController@storeVariable')->name('admin.store.variable');
    Route::post('/admin/edit/variable', 'AdminController@editVariable')->name('admin.edit.variable');

    Route::post('/admin/filter/points', 'PointController@filter')->name('admin.filter.points');
});

Route::middleware('role:student')->group(function(){
    Route::post('/report', 'ViolationController@store')->name('report');
});

//from subject page
Route::get('/class/{subject}/{class}', 'SubjectController@class')->name('class/class');
Route::get('/class/{subject}/{classnav}', 'SubjectController@classnav')->name('class/classnav');
Route::get('/class/{subject}/{class_topic}', 'SubjectController@class_topic')->name('class/class_topic');
Route::get('/assessment/{id}', 'SubjectController@assessment')->name('assessment');
Route::get('/single/{id}', 'SubjectController@single')->name('single');

//author page
Route::get('/follow/{id}','IndexController@follow')->name('follow');
