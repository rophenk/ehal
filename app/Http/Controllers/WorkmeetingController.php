<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\WorkmeetingModel;
use App\Models\WorkmeetingDocumentModel;
use App\Models\WorkmeetingQuestionModel;
use DB;

class WorkmeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user           = $request->user();
        $workmeeting    = WorkmeetingModel::all();

        return view('halo.workmeeting-list', ['workmeeting' => $workmeeting, 'user' => $user]);
    }

    public function alerts(Request $request)
    {
        $user       = $request->user();

        return view('halo.ui_alerts_api');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        $message    = $request->message;

        return view('halo.workmeeting-add', [
            'message' => $message, 
            'user' => $user
            ]);
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

        $explode_input_date = explode("-",$request->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $workmeeting              = new WorkmeetingModel;
        $workmeeting->uuid        = Uuid::uuid4();
        $workmeeting->date        = $date;
        $workmeeting->name        = $request->name;
        $workmeeting->location    = $request->location;
        $workmeeting->description = $request->description;
        $workmeeting->save();

        if($workmeeting->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        return view('halo.workmeeting-add', [
            'message' => $message, 
            'user' => $user
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        $workmeeting_document = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

        $workmeeting_question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.id', 'workmeeting_question.question', 'workmeeting_question.answer', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_id', '=', $workmeeting->id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->get();

        $explode_input_date = explode("-",$workmeeting["date"]);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];
        
        return view('halo.publicview-workmeeting', [
            'workmeeting'           => $workmeeting, 
            'workmeeting_document'  => $workmeeting_document,
            'workmeeting_question'  => $workmeeting_question, 
            'date'                  => $date
            ]);
    }

    public function showQuestion(Request $request)
    {
        $uuid  = $request->uuid;
        $docid = $request->docid;

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        $workmeeting_document = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

        $workmeeting_question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.id', 'workmeeting_question.question', 'workmeeting_question.answer', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_id', '=', $workmeeting->id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->get();

        $explode_input_date = explode("-",$workmeeting["date"]);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];
        
        return view('halo.publicview-question', [
            'workmeeting'           => $workmeeting, 
            'workmeeting_document'  => $workmeeting_document,
            'workmeeting_question'  => $workmeeting_question, 
            'date'                  => $date
            ]);
    }

    public function showAnswer(Request $request)
    {
        $uuid  = $request->uuid;
        $docid = $request->docid;

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        $workmeeting_document = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

        $workmeeting_question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.id', 'workmeeting_question.question', 'workmeeting_question.answer', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_id', '=', $workmeeting->id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->get();

        $explode_input_date = explode("-",$workmeeting["date"]);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];
        
        return view('halo.publicview-answer', [
            'workmeeting'           => $workmeeting, 
            'workmeeting_document'  => $workmeeting_document,
            'workmeeting_question'  => $workmeeting_question, 
            'date'                  => $date
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user       = $request->user();

        // Tampilkan data Workmeeting
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->get();
        // Format Data menjadi dd/mm/yyyy
        $explode_input_date = explode("-",$workmeeting[0]["date"]);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $message = '';

        return view('halo.workmeeting-edit', ['user' => $user, 
            'workmeeting' => $workmeeting, 
            'date' => $date, 
            'message' => $message
            ]);
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

        $explode_input_date = explode("-",$request->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        //var_dump($request->uuid);die();
        WorkmeetingModel::where('uuid',$request->uuid)
        ->update([
            'date' => $date,
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description
            ]);

        $message = 'success';
        $uuid = $request->uuid;
        // Tampilkan data Workmeeting
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->get();
        return view('halo.workmeeting-edit', [
            'message' => $message, 
            'date' => $request->date, 
            'workmeeting' => $workmeeting, 
            'user' => $user
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user       = $request->user();
        $uuid       = $request->uuid;

        $workmeeting = WorkmeetingModel::where('uuid', $uuid)->delete();

        $message = 'deleted';
        return view('halo.workmeeting-add', [
            'message' => $message, 
            'workmeeting' => $workmeeting, 
            'user' => $user
            ]);
    }

    public function questions(Request $request)
    {
        $user       = $request->user();
        $uuid       = $request->uuid;

        $workmeeting = WorkmeetingModel::where('uuid', $uuid)->first();
        $workmeeting_id = $workmeeting->id;
        $workmeeting_question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.*', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_id', '=', $workmeeting_id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->get();

        $workmeeting_document = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting_id)
                                ->get();
        $message = '';
        //return $workmeeting_question;
        return view('halo.workmeeting-questions', [
            'message' => $message, 
            'workmeeting' => $workmeeting, 
            'user' => $user, 
            'workmeeting_question' => $workmeeting_question, 
            'workmeeting_document' => $workmeeting_document
            ]);
    }

    public function listQuestionDoc(Request $request)
    {
        $user           = $request->user();
        $document       = WorkmeetingDocumentModel::where('type', '=', 'question')->get();

        return view('halo.question-list', [
            'document' => $document,
            'user' => $user
        ]);
    }

    public function listAnswerDoc(Request $request)
    {
        $user           = $request->user();
        $document       = WorkmeetingDocumentModel::where('type', '=', 'answer')->get();

        return view('halo.answer-list', [
            'document' => $document,
            'user' => $user
        ]);
    }
}
