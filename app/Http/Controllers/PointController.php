<?php

namespace App\Http\Controllers;

use App\Point;
use Illuminate\Http\Request;

use Auth;

class PointController extends Controller
{
    public function studentPoints(){
        return view('student.points');
    }
    public function filter(Request $request){
        if ($request->ajax()) {
            $points = new Point();
            $points = $points->newQuery();

            if ($request->has('month') && $request->month != "") {
                $points->whereMonth('created_at',$request->month);
            }

            if ($request->has('type') && $request->type != "") {
                $points->where('type',$request->type);
            }

            $points->where('user_id', Auth::user()->id)->orderBy('id','desc');
            
            return response()->json($points->get());
        }
    }
}
