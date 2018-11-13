<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Package;
<<<<<<< HEAD
use App\User;
use App\TopStudent;
use Carbon\Carbon;
use DB;
=======
use App\PackageSpec;
use App\TopStudent;
use Carbon;
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c

class IndexController extends Controller
{

    public function __construct(){
<<<<<<< HEAD
        $this->middleware('guest:web');
=======
        $this->middleware('guest:users');
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
    }

    public function index(){

        $now = Carbon::now();
        $week = $now->weekOfYear;
        $totalScore = 0;
        $averegaScore = 0;
        $iterations = 0;

        $carousels = Carousel::all();
        $packages = Package::with('packageSpecs')->get();
<<<<<<< HEAD
        //$topIds = DB::table('top_students')->where('week',$week)->pluck('user_id')->distinct()->get();
        $topIds = TopStudent::select('user_id')->where('week',23)->orderBy('score')->distinct()->get();
        $topStudents = TopStudent::where('week',23)->get();
=======
        $topIds = DB::table('top_students')->where('week',$week)->pluck('user_id')->distinct()->get();
        $topStudents = TopStudent::where('week',$week)->get();
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c

        $list = collect([]);
        $sortedlist = collect([]);

        foreach ($topIds as $id) {
<<<<<<< HEAD
            $averegaScore = DB::table('top_students')->where('week',23)->where('user_id',$id)->avg('score');
            $top = new TopStudent();
            $top->user_id = $id;
            $top->score = $averegaScore;
            dd($id);
=======
            $averegaScore = DB::table('top_students')->where('week',$week)->where('user_id',$id)->avg('score');
            $top = new TopStudent();
            $top->user_id = $id;
            $top->score = $averegaScore;
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
            $list->push($top);
        }

        $sortedlist = $list->sortBy('score')->take(3);
<<<<<<< HEAD
        dd($sortedlist);
        return view('welcome')->withCarousels($carousels)->withPackages($packages)
        ->withSortedList($sortedlist);
=======

        return view('welcome')->withCarousels($carousels)->withPackages($packages)->withSortedList($sortedlist);
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
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
        return view('subject')->withSubject($subject);
    }
    public function author($id){
<<<<<<< HEAD
        $user = User::with('notes')->where('id',$id)->get()->first();
        //dd($user);
        return view('author')->withUser($user);
=======
        return view('author');
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
    }
}
