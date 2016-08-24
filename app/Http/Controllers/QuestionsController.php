<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\WorkmeetingModel;
use App\Models\WorkmeetingDocumentModel;
use App\Models\SpeakersModel;
use App\Models\WorkmeetingQuestionModel;
use DB;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        $uuid       = $request->uuid;
        $message    = $request->message;

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        $fpdip      = ['fraction_id' => '1', 'fraction_leader' => 'no'];
        $fpg        = ['fraction_id' => '2', 'fraction_leader' => 'no'];
        $fgerindra  = ['fraction_id' => '3', 'fraction_leader' => 'no'];
        $fpd        = ['fraction_id' => '4', 'fraction_leader' => 'no'];
        $fpan       = ['fraction_id' => '5', 'fraction_leader' => 'no'];
        $fpkb       = ['fraction_id' => '6', 'fraction_leader' => 'no'];
        $fpks       = ['fraction_id' => '7', 'fraction_leader' => 'no'];
        $fppp       = ['fraction_id' => '8', 'fraction_leader' => 'no'];
        $fpnasdem   = ['fraction_id' => '9', 'fraction_leader' => 'no'];
        $fphanura   = ['fraction_id' => '10', 'fraction_leader' => 'no'];
        $fptest     = ['fraction_id' => '11', 'fraction_leader' => 'no'];

        $speakers_fraction_leader   = SpeakersModel::where('fraction_leader', 'yes')->get();
        $speakers_fpdip             = SpeakersModel::where($fpdip)->get();
        $speakers_fpg               = SpeakersModel::where($fpg)->get();
        $speakers_fgerindra         = SpeakersModel::where($fgerindra)->get();
        $speakers_fpd               = SpeakersModel::where($fpd)->get();
        $speakers_fpan              = SpeakersModel::where($fpan)->get();
        $speakers_fpkb              = SpeakersModel::where($fpkb )->get();
        $speakers_fpks              = SpeakersModel::where($fpks)->get();
        $speakers_fppp              = SpeakersModel::where($fppp)->get();
        $speakers_fpnasdem          = SpeakersModel::where($fpnasdem)->get();
        $speakers_fphanura          = SpeakersModel::where($fphanura)->get();
        $speakers_fptest            = SpeakersModel::where($fptest)->get();

        return view('halo.question-add', [
            'workmeeting'               => $workmeeting, 
            'speakers_fraction_leader'  => $speakers_fraction_leader, 
            'speakers_fpdip'            => $speakers_fpdip, 
            'speakers_fpg'              => $speakers_fpg, 
            'speakers_fgerindra'        => $speakers_fgerindra, 
            'speakers_fpd'              => $speakers_fpd, 
            'speakers_fpan'             => $speakers_fpan, 
            'speakers_fpkb'             => $speakers_fpkb, 
            'speakers_fpks'             => $speakers_fpks, 
            'speakers_fppp'             => $speakers_fppp, 
            'speakers_fpnasdem'         => $speakers_fpnasdem, 
            'speakers_fphanura'         => $speakers_fphanura, 
            'speakers_fptest'           => $speakers_fptest, 
            'message'                   => $message, 
            'user'                      => $user
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

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        $fpdip      = ['fraction_id' => '1', 'fraction_leader' => 'no'];
        $fpg        = ['fraction_id' => '2', 'fraction_leader' => 'no'];
        $fgerindra  = ['fraction_id' => '3', 'fraction_leader' => 'no'];
        $fpd        = ['fraction_id' => '4', 'fraction_leader' => 'no'];
        $fpan       = ['fraction_id' => '5', 'fraction_leader' => 'no'];
        $fpkb       = ['fraction_id' => '6', 'fraction_leader' => 'no'];
        $fpks       = ['fraction_id' => '7', 'fraction_leader' => 'no'];
        $fppp       = ['fraction_id' => '8', 'fraction_leader' => 'no'];
        $fpnasdem   = ['fraction_id' => '9', 'fraction_leader' => 'no'];
        $fphanura   = ['fraction_id' => '10', 'fraction_leader' => 'no'];
        $fptest     = ['fraction_id' => '11', 'fraction_leader' => 'no'];

        $speakers_fraction_leader   = SpeakersModel::where('fraction_leader', 'yes')->get();
        $speakers_fpdip             = SpeakersModel::where($fpdip)->get();
        $speakers_fpg               = SpeakersModel::where($fpg)->get();
        $speakers_fgerindra         = SpeakersModel::where($fgerindra)->get();
        $speakers_fpd               = SpeakersModel::where($fpd)->get();
        $speakers_fpan              = SpeakersModel::where($fpan)->get();
        $speakers_fpkb              = SpeakersModel::where($fpkb )->get();
        $speakers_fpks              = SpeakersModel::where($fpks)->get();
        $speakers_fppp              = SpeakersModel::where($fppp)->get();
        $speakers_fpnasdem          = SpeakersModel::where($fpnasdem)->get();
        $speakers_fphanura          = SpeakersModel::where($fphanura)->get();
        $speakers_fptest            = SpeakersModel::where($fptest)->get();

        $question = new WorkmeetingQuestionModel;
        $question->workmeeting_id = $request->workmeeting_id;
        $question->speakers_id = $request->speakers_id;
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->save();

        if($question->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        return view('halo.question-add', [
            'workmeeting'               => $workmeeting,
            'speakers_fraction_leader'  => $speakers_fraction_leader, 
            'speakers_fpdip'            => $speakers_fpdip, 
            'speakers_fpg'              => $speakers_fpg, 
            'speakers_fgerindra'        => $speakers_fgerindra, 
            'speakers_fpd'              => $speakers_fpd, 
            'speakers_fpan'             => $speakers_fpan, 
            'speakers_fpkb'             => $speakers_fpkb, 
            'speakers_fpks'             => $speakers_fpks, 
            'speakers_fppp'             => $speakers_fppp, 
            'speakers_fpnasdem'         => $speakers_fpnasdem, 
            'speakers_fphanura'         => $speakers_fphanura, 
            'speakers_fptest'           => $speakers_fptest, 
            'message'                   => $message, 
            'user'                      => $user
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $id         = $request->id;
        $uuid       = $request->uuid;
        $message    = $request->message;

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();
        $workmeeting_id = $workmeeting->id;
        $question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.*', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_question.id', '=', $id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->first();

        $fpdip      = ['fraction_id' => '1', 'fraction_leader' => 'no'];
        $fpg        = ['fraction_id' => '2', 'fraction_leader' => 'no'];
        $fgerindra  = ['fraction_id' => '3', 'fraction_leader' => 'no'];
        $fpd        = ['fraction_id' => '4', 'fraction_leader' => 'no'];
        $fpan       = ['fraction_id' => '5', 'fraction_leader' => 'no'];
        $fpkb       = ['fraction_id' => '6', 'fraction_leader' => 'no'];
        $fpks       = ['fraction_id' => '7', 'fraction_leader' => 'no'];
        $fppp       = ['fraction_id' => '8', 'fraction_leader' => 'no'];
        $fpnasdem   = ['fraction_id' => '9', 'fraction_leader' => 'no'];
        $fphanura   = ['fraction_id' => '10', 'fraction_leader' => 'no'];
        $fptest     = ['fraction_id' => '11', 'fraction_leader' => 'no'];

        $speakers_fraction_leader   = SpeakersModel::where('fraction_leader', 'yes')->get();
        $speakers_fpdip             = SpeakersModel::where($fpdip)->get();
        $speakers_fpg               = SpeakersModel::where($fpg)->get();
        $speakers_fgerindra         = SpeakersModel::where($fgerindra)->get();
        $speakers_fpd               = SpeakersModel::where($fpd)->get();
        $speakers_fpan              = SpeakersModel::where($fpan)->get();
        $speakers_fpkb              = SpeakersModel::where($fpkb )->get();
        $speakers_fpks              = SpeakersModel::where($fpks)->get();
        $speakers_fppp              = SpeakersModel::where($fppp)->get();
        $speakers_fpnasdem          = SpeakersModel::where($fpnasdem)->get();
        $speakers_fphanura          = SpeakersModel::where($fphanura)->get();
        $speakers_fptest            = SpeakersModel::where($fptest)->get();

        return view('halo.question-edit', [
            'question'                  => $question,
            'workmeeting'               => $workmeeting, 
            'speakers_fraction_leader'  => $speakers_fraction_leader, 
            'speakers_fpdip'            => $speakers_fpdip, 
            'speakers_fpg'              => $speakers_fpg, 
            'speakers_fgerindra'        => $speakers_fgerindra, 
            'speakers_fpd'              => $speakers_fpd, 
            'speakers_fpan'             => $speakers_fpan, 
            'speakers_fpkb'             => $speakers_fpkb, 
            'speakers_fpks'             => $speakers_fpks, 
            'speakers_fppp'             => $speakers_fppp, 
            'speakers_fpnasdem'         => $speakers_fpnasdem, 
            'speakers_fphanura'         => $speakers_fphanura, 
            'speakers_fptest'           => $speakers_fptest, 
            'message'                   => $message, 
            'user'                      => $user
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
        $id         = $request->id;
        $uuid       = $request->uuid;

        WorkmeetingQuestionModel::where('id',$request->id)
        ->update([
            'question' => $request->question,
            'answer' => $request->answer
            ]);

        $message = 'success';
        
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();
        $workmeeting_id = $workmeeting->id;
        $question = DB::table('workmeeting_question')
                                ->leftJoin('speakers', 'speakers.id', '=', 'workmeeting_question.speakers_id')
                                ->leftJoin('fraction', 'fraction.id', '=', 'speakers.fraction_id')
                                ->select('workmeeting_question.*', 'speakers.name as name', 'fraction.name as fraction')
                                ->where('workmeeting_question.id', '=', $id)
                                ->orderBy('workmeeting_question.id', 'asc')
                                ->first();

        $fpdip      = ['fraction_id' => '1', 'fraction_leader' => 'no'];
        $fpg        = ['fraction_id' => '2', 'fraction_leader' => 'no'];
        $fgerindra  = ['fraction_id' => '3', 'fraction_leader' => 'no'];
        $fpd        = ['fraction_id' => '4', 'fraction_leader' => 'no'];
        $fpan       = ['fraction_id' => '5', 'fraction_leader' => 'no'];
        $fpkb       = ['fraction_id' => '6', 'fraction_leader' => 'no'];
        $fpks       = ['fraction_id' => '7', 'fraction_leader' => 'no'];
        $fppp       = ['fraction_id' => '8', 'fraction_leader' => 'no'];
        $fpnasdem   = ['fraction_id' => '9', 'fraction_leader' => 'no'];
        $fphanura   = ['fraction_id' => '10', 'fraction_leader' => 'no'];
        $fptest     = ['fraction_id' => '11', 'fraction_leader' => 'no'];

        $speakers_fraction_leader   = SpeakersModel::where('fraction_leader', 'yes')->get();
        $speakers_fpdip             = SpeakersModel::where($fpdip)->get();
        $speakers_fpg               = SpeakersModel::where($fpg)->get();
        $speakers_fgerindra         = SpeakersModel::where($fgerindra)->get();
        $speakers_fpd               = SpeakersModel::where($fpd)->get();
        $speakers_fpan              = SpeakersModel::where($fpan)->get();
        $speakers_fpkb              = SpeakersModel::where($fpkb )->get();
        $speakers_fpks              = SpeakersModel::where($fpks)->get();
        $speakers_fppp              = SpeakersModel::where($fppp)->get();
        $speakers_fpnasdem          = SpeakersModel::where($fpnasdem)->get();
        $speakers_fphanura          = SpeakersModel::where($fphanura)->get();
        $speakers_fptest            = SpeakersModel::where($fptest)->get();

        return view('halo.question-edit', [
            'question'                  => $question,
            'workmeeting'               => $workmeeting, 
            'speakers_fraction_leader'  => $speakers_fraction_leader, 
            'speakers_fpdip'            => $speakers_fpdip, 
            'speakers_fpg'              => $speakers_fpg, 
            'speakers_fgerindra'        => $speakers_fgerindra, 
            'speakers_fpd'              => $speakers_fpd, 
            'speakers_fpan'             => $speakers_fpan, 
            'speakers_fpkb'             => $speakers_fpkb, 
            'speakers_fpks'             => $speakers_fpks, 
            'speakers_fppp'             => $speakers_fppp, 
            'speakers_fpnasdem'         => $speakers_fpnasdem, 
            'speakers_fphanura'         => $speakers_fphanura, 
            'speakers_fptest'           => $speakers_fptest, 
            'message'                   => $message, 
            'user'                      => $user
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
        $id       = $request->id;

        $question = WorkmeetingQuestionModel::where('id', $id)->delete();

        $message = 'deleted';

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

        return view('halo.workmeeting-questions', [
            'message'               => $message, 
            'workmeeting'           => $workmeeting, 
            'user'                  => $user, 
            'workmeeting_question'  => $workmeeting_question,
            'workmeeting_document' => $workmeeting_document
            ]);
    }
}
