<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Note;
use App\Subject;
use App\Topic;
use App\Exam;
use App\Quiz;
use App\Report;
use App\Award;
use App\Payment;
use App\Violation;
use App\Permission;
use App\Role;

use DB;

class AdminController extends Controller
{
    public function admindash(){
        return view('admin/admindash');
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

    public function getAllResults(){
         $ids = Report::select('user_id')->whereMonth('created_at',date('m'))->distinct()->pluck('user_id');
        //$results = DB::table('reports')->select('user_id','week','score')->whereMonth('created_at',date('m'))->groupBy('user_id')->get();0
        $subjects = Subject::all();
        $results = collect([]);
        $avgs = collect([]);
        $users = collect([]);
        foreach($ids as $id){
            $user = User::select('firstname','lastname')->where('id',$id)->get();
            $users->push($user);
            //dd($users[0]);
            $scores = Report::select('user_id','score')->where('user_id',$id)->whereMonth('created_at',date('m'))->distinct()->get();
            $sum = 0;
            $avg = 0;
            $count = 0;
            foreach($scores as $score){
                $sum += $score->score;
                $count++;
                if($scores->count() == $count){
                    $avg = $sum/4;
                    $avgs->push($avg);
                    //dd($avgs);
                    break;
                }
            }
            $results->push($scores);
        }
        return view('admin/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users);
    }
    public function results($ids){
        $results = collect([]);
        $avgs = collect([]);
        foreach($ids as $id){
            $scores = Report::select('user_id','score')->where('user_id',$id)->whereMonth('created_at',date('m'))->distinct()->get();
            $sum = 0;
            $avg = 0;
            $count = 0;
            foreach($scores as $score){
                $sum += $score->score;
                $count++;
                if($scores->count() == $count){
                    $avg = $sum/4;
                    $avgs->push($avg);
                    //dd($avgs);
                    break;
                }
            }
            $results->push($scores);
        }
        return $results;
    }
    public function filterResult(Request $request){

        $reports = new Report();
        $reports = $reports->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            //$reports->where('subject_id', $request->subject);
            $reports->whereHas('exams', function($query) use ($request){
                $query->where('subject_id',$request->subject);
            });
        }

        if ($request->has('type') && $request->type != "") {
            //$reports->where('subject_id', $request->subject);
            $reports->whereHas('exams', function($query) use ($request){
                $query->where('exam_type_id',$request->type);
            });
        }

        if ($request->has('form') && $request->form != "") {
            $reports->where('form',$request->form);
        }

        if ($request->has('month') && $request->month != "") {
            $reports->whereMonth('created_at',$request->month);
        }

        if ($request->has('username') && $request->username != "") {
            $reports->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $reports->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('admin.reports')->withreports($reports->get())->withSubjects($subjects);

    }

    public function filterResults(Request $request){

        $reports = new Report();
        $reports = $reports->newQuery();
    
        $subjects = Subject::all();
    
        if ($request->has('subject') && $request->subject != "") {
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('subject_id',$request->subject);
            });
        }
    
        if ($request->has('form') && $request->form != "") {
            // dd($request->has('form'));
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('form',$request->form);
            });
        }
    
        if ($request->has('title') && $request->title != "") {
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('title',$request->title);
            });
        }
    
        if ($request->has('username') && $request->username != "") {
            $reports->whereHas('user', function($query) use ($request){
                $query->where('username',$request->username);
            });
        }
    
        if ($request->has('school') && $request->school != "") {
            $reports->whereHas('user', function($query) use ($request){
                $query->where('school',$request->school);
            });
        }
    
        if ($request->has('month') && $request->month != "") {
            $reports->whereMonth('created_at',$request->month);
        }
    
        $reports = $reports->get();
    
       $subjects = Subject::all();
       $results = collect([]);
       $avgs = collect([]);
       $users = collect([]);
       foreach($reports as $report){
           $user = User::select('firstname','lastname')->where('id',$report->user_id)->get();
           $users->push($user);
           //dd($users[0]);
           $scores = Report::select('user_id','score')->where('user_id',$report->user_id)->distinct()->get();
           $sum = 0;
           $avg = 0;
           $count = 0;
           foreach($scores as $score){
               $sum += $score->score;
               $count++;
               if($scores->count() == $count){
                   $avg = $sum/4;
                   $avgs->push($avg);
                   //dd($avgs);
                   break;
               }
           }
           $results->push($scores);
       }
       return view('admin/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users);
    }

    public function getAllAwards(){
        $awards = Award::with('user')->with('subject')->get();
        $subjects = Subject::all();
        return view('admin.awards')->withAwards($awards)->withSubjects($subjects);
    }
    public function filterAwards(Request $request){

        $awards = new Award();
        $awards = $awards->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $awards->where('subject_id', $request->subject);
        }

        if ($request->has('week') && $request->week != "") {
            //$awards->where('week', $request->week);
        }

        if ($request->has('form') && $request->form != "") {
            $awards->where('form',$request->form);
        }

        if ($request->has('month') && $request->month != "") {
            $awards->whereMonth('created_at',$request->month);
        }

        if ($request->has('username') && $request->username != "") {
            $awards->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $awards->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('admin.awards')->withawards($awards->get())->withSubjects($subjects);

    }

    public function getAllPayments(){
        $payments = Payment::with('user')->get();
        $sum =  DB::table('payments')->sum('amount');
        return view('admin.payments')->withPayments($payments)->withSum($sum);
    }
    public function filterPayments(Request $request){

        $payments = new payment();
        $payments = $payments->newQuery();

        if ($request->has('username') && $request->username != "") {
            $payments->whereHas('user', function($query) use ($request){
                $query->where('type',$request->type);
            });
        }

        if ($request->has('week') && $request->week != "") {
            //$payments->where('week', $request->week);
        }

        if ($request->has('form') && $request->form != "") {
            $payments->whereHas('user', function($query) use ($request){
                $query->where('form',$request->form);
            });
        }

        if ($request->has('type') && $request->type != "") {
            $payments->whereHas('user', function($query) use ($request){
                $query->where('type',$request->type);
            });
        }

        if ($request->has('month') && $request->month != "") {
            $payments->whereMonth('created_at',$request->month);
        }

        if ($request->has('username') && $request->username != "") {
            $payments->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $payments->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('admin.payments')->withpayments($payments->get());

    }

    public function getAllViolations(){
        $violations = Violation::with('user')->get();
        return view('admin.violations')->withViolations($violations);
    }

    public function role_permission(){
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.role_permission')->withPermissions($permissions)->withroles($roles);
    }

    public function addRole(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:30|string',
            'display_name'=>'string|max:40',
            'description'=>'string|max:100'
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        
        if ($role->save() && $request->has('permissions') && $request->permissions != "") {
            $role->permissions()->attach($request->permissions);
        }

        return redirect()->back();
    }

    public function addPermission(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:30|string',
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
