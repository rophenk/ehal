<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\SpeakersModel;
use App\Models\FractionModel;
use App\Models\AssistantModel;
use DB;

class SpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        $speakers   = SpeakersModel::all();

        return view('halo.speakers-list', ['speakers' => $speakers, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        $fraction   = FractionModel::all();
        $message    = $request->message;

        return view('halo.speaker-add', ['message' => $message, 'user' => $user, 'fraction' => $fraction]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user       = $request->user();

        $speaker = new SpeakersModel;
        $speaker->uuid = Uuid::uuid4();
        $speaker->fraction_id = $request->fraction_id;
        $speaker->name = $request->name;
        $speaker->email = $request->email;
        $speaker->fraction_leader = $request->fraction_leader;
        $speaker->photo = NULL;
        $speaker->save();

        if($speaker->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        return view('halo.workmeeting-add', ['message' => $message, 'user' => $user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user        = $request->user();
        $speakers    = SpeakersModel::where('uuid', $request->uuid)->first();
        $speakers_id = $speakers->id;
        $assistant   = AssistantModel::where('speakers_id', $speakers->id)->get();

        $email_log   = DB::table('email_log')
                        ->leftJoin('speakers', 'speakers.id', '=', 'email_log.speakers_id')
                        ->leftJoin('workmeeting', 'workmeeting.id', '=', 'email_log.workmeeting_id')
                        ->select('email_log.id', 'email_log.created_at', 'speakers.name as name', 'workmeeting.name as workmeeting')
                        ->where('email_log.speakers_id', '=', $speakers_id)
                        ->orderBy('email_log.created_at', 'desc')
                        ->get();

        $message     = '';
        //return view('halo.speaker-view', ['speakers' => $speakers, 'user' => $user]);
        return view('halo.speaker-view-2', [
            'message'   => $message, 
            'email_log' => $email_log, 
            'speakers'  => $speakers, 
            'assistant' => $assistant, 
            'user'      => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user       = $request->user();
        SpeakersModel::where('uuid',$request->uuid)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'fraction_leader' => $request->fraction_leader
            ]);

        $message = 'success';
        $uuid = $request->uuid;

        $speakers   = SpeakersModel::where('uuid', $request->uuid)->first();
        $speakers_id = $speakers->id;
        $assistant = AssistantModel::where('speakers_id', $speakers->id)->get();

        return view('halo.speaker-view-2', ['message' => $message, 'speakers' => $speakers, 'assistant' => $assistant, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
