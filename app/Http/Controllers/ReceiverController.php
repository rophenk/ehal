<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\ReceiverModel;

class ReceiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        $receiver   = ReceiverModel::all();

        return view('halo.receiver-list', ['receiver' => $receiver, 'user' => $user]);
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

        return view('halo.receiver-add', [
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
        $user = $request->user();

        $receiver = new ReceiverModel;
        $receiver->uuid = Uuid::uuid4();
        $receiver->name = $request->name;
        $receiver->email = $request->email;
        $receiver->description = $request->description;
        $receiver->save();

        if($receiver->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        return view('halo.receiver-add', [
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
        $message    = $request->message;
        $uuid       = $request->uuid;

        $receiver   = ReceiverModel::where('uuid', '=', $uuid)->first();

        return view('halo.receiver-edit', [
            'receiver' => $receiver, 
            'message' => $message, 
            'user' => $user
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
        ReceiverModel::where('uuid',$request->uuid)
        ->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'description' => $request->description
            ]);

        $message = 'success';
        $uuid = $request->uuid;

        $receiver   = ReceiverModel::where('uuid', $request->uuid)->first();

        return view('halo.receiver-edit', [
            'message' => $message, 
            'receiver' => $receiver, 
            'user' => $user
            ]);
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
