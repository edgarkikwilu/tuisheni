<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Package;
use App\User;
use App\Follow;
use App\Note;
use App\Subject;
use App\TopStudent;
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
        $subject_id = Subject::select('id')->where('name',$subject)->get()->first();
        //dd($subject_id);
        $topStudents = TopStudent::where('week',1)->where('subject',$subject)
                        ->orderBy('score','desc')->limit(3)->get();
        $recommended = Note::where('original',true)->whereHas('topic.subject', function($query)  use ($subject_id){
            $query->where('id', 8);
        })->get();
        
        //dd($recommended);
        $teachers = User::where('type','teacher')->orderBy('rate','desc')->limit(4)->get();
        return view('subject')->withSubject($subject)->withTopStudents($topStudents)
            ->withRecommended($recommended)->withTeachers($teachers);
    }
    public function author($id){
        $user = User::with('notes')->where('id',$id)->first();
        $following = Follow::where('user_id',$id)->count();
        $followers = Follow::where('follow_id',$id)->count();
        return view('author')->withUser($user)->withFollowing($following)->withFollowers($followers);
    }

    public function follow($id){
        if (Auth::check()) {
            $follow = new Follow();
            $follow->user_id = Auth()->id;
            $follow->follow_id = $id;
            $follow->save();
            Session::flash('success','followed!');
            return redirect()->back();
        } else {
            Session::flash('error','please login first!');
            return redirect()->back();
        }
        
    }
}
