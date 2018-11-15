<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Package;
use App\PackageSpec;
use App\TopStudent;
use Carbon;

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
        $topIds = DB::table('top_students')->where('week',$week)->pluck('user_id')->distinct()->get();
        $topStudents = TopStudent::where('week',$week)->get();

        $list = collect([]);
        $sortedlist = collect([]);

        foreach ($topIds as $id) {
            $averegaScore = DB::table('top_students')->where('week',$week)->where('user_id',$id)->avg('score');
            $top = new TopStudent();
            $top->user_id = $id;
            $top->score = $averegaScore;
            $list->push($top);
        }

        $sortedlist = $list->sortBy('score')->take(3);

        return view('welcome')->withCarousels($carousels)->withPackages($packages)->withSortedList($sortedlist);
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
        return view('author');
    }
    public function editprofile(){
        return view('editprofile');
    }
    public function assesment(){
        return view('assesment');
    }
    public function admin(){
        return view('admin');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
