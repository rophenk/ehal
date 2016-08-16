<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
Use DB;
use Redis;
use Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        return view('halo.dashboard', ['user' => $user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {

        $user       = $request->user();
        $workmeeting = DB::table('workmeeting')
                     ->select(DB::raw('count(id) as count'))
                     ->first();

        $speakers = DB::table('speakers')
                     ->select(DB::raw('count(id) as count'))
                     ->first();

        $workmeeting_question = DB::table('workmeeting_question')
                     ->select(DB::raw('count(id) as count'))
                     ->first();

        $workmeeting_document = DB::table('workmeeting_document')
                     ->select(DB::raw('count(id) as count'))
                     ->first();

        $workmeeting_timeline = DB::table('workmeeting')
                     ->select(DB::raw('id, uuid, name, description, DATE_FORMAT(date,"%d %b") AS date_display, DATE_FORMAT(date,"%d %M %Y") AS date_author, DATE_FORMAT(date,"%d/%m/%Y") AS date_data'))
                     ->orderBy('id', 'desc')
                     ->orderBy('date', 'asc')
                     ->take(5)
                     ->get();

        $random_speakers = DB::table('speakers')
                     ->join('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                     ->select('speakers.*', 'fraction.name AS fraction_name')
                     ->inRandomOrder()
                     ->take(3)
                     ->get();

        

        //var_dump($workmeeting_timeline);die();
        return view('halo.dashboard', ['user' => $user, 'workmeeting' => $workmeeting, 'speakers' => $speakers, 'random_speakers' => $random_speakers, 'workmeeting_question' => $workmeeting_question, 'workmeeting_document' => $workmeeting_document, 'workmeeting_timeline' => $workmeeting_timeline]);


    }
}
