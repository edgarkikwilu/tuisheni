<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Package;
use App\User;
use App\Follow;
use App\Note;
use App\Exam;
use App\Subject;
use App\TopStudent;
use App\Report;
use Carbon\Carbon;
use DB;
use Auth;
use Session;

class IndexController extends Controller
{

    public function __construct(){
        $this->middleware('guest:web');
    }

    public function index(){

        $now = Carbon::now();
        $week = $now->weekOfYear;
        $totalScore = 0;
        $averegaScore = 0;
        $iterations = 0;

        $carousels = Carousel::all();
        $packages = Package::with('packageSpecs')->get();
        //$topIds = DB::table('top_students')->where('week',$week)->pluck('user_id')->distinct()->get();
        // $topIds = TopStudent::select('user_id')->where('week',23)->orderBy('score')->distinct()->get();
        $topStudents = TopStudent::where('week',1)->where('subject','Overall')->orderBy('score','desc')->limit(3)->get();

        $list = collect([]);
        $sortedlist = collect([]);

        // foreach ($topIds as $id) {
        //     $averegaScore = DB::table('top_students')->where('week',23)->where('user_id',$id)->avg('score');
        //     $top = new TopStudent();
        //     $top->user_id = $id;
        //     $top->score = $averegaScore;
        //     dd($id);
        //     $list->push($top);
        // }

        //$sortedlist = $list->sortBy('score')->take(3);
        return view('welcome')->withCarousels($carousels)->withPackages($packages)
        ->withTopStudents($topStudents);
    }
    public function explore(){
        return view('explore');
    }
    public function dm(){
        return view('dm');
    }
    public function profile(){
        return view('myprofile');
    }
    public function subject($subject){
        $subject_id = DB::table('subjects')->where('name', 'like', '%'.$subject.'%')->pluck('id')->first();
        $topStudents = TopStudent::where('week',1)->where('subject',$subject)
                        ->orderBy('score','desc')->limit(3)->get();
        $recommended = Note::where('original',true)->whereHas('topic.subject', function($query)  use ($subject_id){
            $query->where('id', 8);
        })->get();
        $other = Note::where('original',true)->whereHas('topic.subject', function($query)  use ($subject_id){
            $query->where('id', 8);
        })->get();
        $exams = Exam::with('user')->where('subject_id', $subject_id)->get();
        $packages = Package::with('packageSpecs')->get();
        $teachers = User::where('type','teacher')->orderBy('rate','desc')->limit(4)->get();
        return view('subject')->withSubject($subject)->withTopStudents($topStudents)
            ->withRecommended($recommended)->withOther($other)->withTeachers($teachers)->withExams($exams)->withPackages($packages);
    }
    public function author($id){
        $user = User::with('notes')->where('id',$id)->get()->first();
        $following = Follow::where('user_id',$id)->count();
        $followers = Follow::where('follow_id',$id)->count();
        return view('author')->withUser($user)->withFollowing($following)->withFollowers($followers);
    }

    public function follow($id){
        // dd($this->checkIfFollowedByUser($id));
        if (Auth::check() && !$this->checkIfFollowedByUser($id)) {
            $follow = new Follow();
            $follow->user_id = Auth::user()->id;
            $follow->follow_id = $id;
            $follow->save();
            Session::flash('success','followed!');
            return response()->json(['success'=>'followed']);
        } else {
            Session::flash('error','please login first!');
            return response()->json(['error'=>'please login first']);
        }
    }
    public function checkIfFollowedByUser($id){
        if (Auth::user()) {
            $follows = Follow::where('follow_id',$id)->get();
        foreach ($follows as $follow) {
            if ($follow->user_id == Auth::user()->id) {
                return true;
            }
        }
        }
        return false;
    }

    public function editprofile(){
        return view('editprofile');
    }
    
    public function single(){
        return view('single');
    }
    public function teacherdash(){
        return view('teacherdash');
    }
    public function results(){
        // public function getAllResults(){
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
           return view('results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users);
       
    }
    
}
