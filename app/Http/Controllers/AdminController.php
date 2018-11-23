<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Note;
use App\Subject;
use App\Topic;
use App\Exam;
use App\Quiz;

class AdminController extends Controller
{
    public function admindash(){
        return view('admin/admindash');
    }
    public function results(){
        return view('admin/results');
    }
    public function awards(){
        return view('admin/awards');
    }
    public function payments(){
        return view('admin/payments');
    }
    public function advertisements(){
        return view('admin/advertisements');
    }
    public function violations(){
        return view('admin/violations');
    }

    public function getAllUsers(){
        $users = User::all();
        return view('admin.users')->withUsers($users);
    }
    public function filterUsers(Request $request){
        $users = new User();
        $users = $users->newQuery();

        if ($request->has('account') && $request->account != "") {
            $users->where('type','LIKE', '%'.$request->account.'%');
        }

        if ($request->has('firstname') && $request->firstname != "") {
            $users->where('firstname','LIKE', '%'.$request->firstname.'%');
        }

        if ($request->has('lastname') && $request->lastname != "") {
            $users->where('lastname','LIKE', '%'.$request->lastname.'%');
        }

        return view('admin.users')->withUsers($users->get());
    }

    public function getAllNotes(){
        $notes = Note::where('original',true)->orderBy('id','desc')->get();
        $subjects = Subject::all();
        return view('admin.notes')->withNotes($notes)->withSubjects($subjects);
    }
    public function filterNotes(Request $request){
            $notes = new Note();
            $notes = $notes->newQuery();

            if ($request->has('subject') && $request->subject != "") {
                $notes->whereHas('topic', function($query) use ($request){
                    $query->where('subject_id',$request->subject);
                });
            }

            if ($request->has('form') && $request->form != "") {
                // dd($request->has('form'));
                $notes->whereHas('topic', function($query) use ($request){
                    $query->where('form',$request->form);
                });
            }

            if ($request->has('username') && $request->form != "") {
               // dd('username');
                $notes->whereHas('user', function($query) use ($request){
                    $query->where('username','like', '%'.$request->username.'%');
                });
            }

            if ($request->has('school') && $request->school != "") {
                // dd('school');
                $notes->whereHas('user', function($query) use ($request){
                    $query->where('school','like', '%'.$request->school.'%');
                });
            }

        return view('admin.notes')->withNotes($notes->get())->withSubjects($subjects);
    }
    public function editNotes($id){
        $notes = Note::find($id);
        return view('admin/editnotes')->withNotes($notes);
    }

    public function getAllTopics(){
        $topics = Topic::with('subject')->with('notes')->get();
        return view('admin/topics')->withTopics($topics);
    }

    public function getAllExaminations(){
        $exams = Exam::with('user')->get();
        $subjects = Subject::all();
        return view('admin/examinations')->withExams($exams)->withSubjects($subjects);
    }
    public function filterExams(Request $request){
        $exams = new Exam();
        $exams = $exams->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $exams->where('subject_id', $request->subject);
        }

        if ($request->has('form') && $request->form != "") {
            $exams->where('form',$request->form);
        }

        if ($request->has('title') && $request->title != "") {
            $exams->where('title',$request->title);
        }

        if ($request->has('username') && $request->username != "") {
            $exams->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $exams->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('admin.examinations')->withexams($exams->get())->withSubjects($subjects);
    }

    public function getAllQuizzes(){
        $quizzes = Quiz::with('user')->get();
        $subjects = Subject::all();
        return view('admin/quizzes')->withquizzes($quizzes)->withSubjects($subjects);
    }
    public function filterQuizzes(Request $request){
        $quizzes = new Quiz();
        $quizzes = $quizzes->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $quizzes->where('subject_id', $request->subject);
        }

        if ($request->has('form') && $request->form != "") {
            $quizzes->where('form',$request->form);
        }

        if ($request->has('title') && $request->title != "") {
            $quizzes->where('title',$request->title);
        }

        if ($request->has('username') && $request->username != "") {
            $quizzes->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $quizzes->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('admin.quizzes')->withQuizzes($quizzes->get())->withSubjects($subjects);
    }
    public function deleteQuiz($id){
        $quiz = Quiz::find($id);
        $quiz->remove();
        return redirect()->back();
    }

    public function addRole(Request $request){
        $request->validate([
            'name'=>'required|unique|min:3|max:30|string',
            'display_name'=>'string|max:40',
            'description'=>'string|max:100'
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        
        if ($role->save()) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->back();
    }

    public function addPermission(Request $request){
        $request->validate([
            'name'=>'required|unique|min:3|max:30|string',
            'display_name'=>'string|max:40',
            'description'=>'string|max:100'
        ]);
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        return redirect()->back();
    }
    
}
