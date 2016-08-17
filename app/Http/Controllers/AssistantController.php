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

class AssistantController extends Controller
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

        $speakers    = SpeakersModel::where('uuid', $uuid)
                      ->first();

        return view('halo.assistant-add',
            [
                'user'     => $user,
                'speakers' => $speakers,
                'message'  => $message
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
        $uuid       = $request->uuid;
        $message    = $request->message;

        $speakers    = SpeakersModel::where('uuid', $uuid)
                      ->first();

        if(!empty($request->email1)) {
            $email1 = $request->email1;
        } else {
            $email1 = NULL;
        }

        if(!empty($request->email2)) {
            $email2 = $request->email2;
        } else {
            $email2 = NULL;
        }

        $assistant = new AssistantModel;
        $assistant->speakers_id = $request->speakers_id;
        $assistant->name        = $request->name;
        $assistant->email1      = $email1;
        $assistant->email2      = $email2;
        $assistant->roles       = $request->roles;
        $assistant->phone       = $request->phone;
        $assistant->save();

        if($assistant->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        return view('halo.assistant-add',
            [
                'user'     => $user,
                'speakers' => $speakers,
                'message'  => $message
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
        $uuid       = $request->uuid;
        $message    = $request->message;
        $id         = $request->id;

        $speakers   = SpeakersModel::where('uuid', $uuid)
                      ->first();

        $assistant  = AssistantModel::where('id', $id)
                      ->first();

        return view('halo.assistant-edit',
            [
                'user'     => $user,
                'speakers' => $speakers,
                'assistant' => $assistant,
                'message'  => $message
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
        $uuid       = $request->uuid;
        $message    = $request->message;
        $id         = $request->id;

        AssistantModel::where('id',$request->id)
        ->update([
            'name'   => $request->name,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'phone'  => $request->phone,
            'roles'  => $request->roles
            ]);

        $speakers   = SpeakersModel::where('uuid', $uuid)
                      ->first();

        $assistant  = AssistantModel::where('id', $id)
                      ->first();

        $message = 'success';

        return view('halo.assistant-edit',
            [
                'user'     => $user,
                'speakers' => $speakers,
                'assistant' => $assistant,
                'message'  => $message
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
        $user      = $request->user();
        $uuid      = $request->uuid;
        $id        = $request->id;

        $assistant = AssistantModel::where('id', $id)->delete();

        $speakers   = SpeakersModel::where('uuid', $uuid)
                      ->first();

        $message = 'deleted';
        return view('halo.assistant-add', [
            'message' => $message, 
            'speakers' => $speakers, 
            'user' => $user
            ]);
    }
}
