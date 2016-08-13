<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
Use DB;

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
                     ->select(DB::raw('id, uuid, name, description, DATE_FORMAT(date,"%d %b") AS date_display, DATE_FORMAT(date,"%d/%m/%Y") AS date_data'))
                     ->get();

        return view('halo.dashboard', ['user' => $user, 'workmeeting' => $workmeeting, 'speakers' => $speakers, 'workmeeting_question' => $workmeeting_question, 'workmeeting_document' => $workmeeting_document, 'workmeeting_timeline' => $workmeeting_timeline]);


    }
}
