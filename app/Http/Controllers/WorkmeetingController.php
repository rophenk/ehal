<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\WorkmeetingModel;
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

        return view('halo.workmeeting-add', ['message' => $message, 'user' => $user]);
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

        $workmeeting = new WorkmeetingModel;
        $workmeeting->uuid = Uuid::uuid4();
        $workmeeting->date = $date;
        $workmeeting->name = $request->name;
        $workmeeting->location = $request->location;
        $workmeeting->description = $request->description;
        $workmeeting->save();

        if($workmeeting->save() == TRUE) {
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

        // Tampilkan data Workmeeting
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->get();
        // Format Data menjadi dd/mm/yyyy
        $explode_input_date = explode("-",$workmeeting[0]["date"]);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $message = '';

        return view('halo.workmeeting-edit', ['user' => $user, 'workmeeting' => $workmeeting, 'date' => $date, 'message' => $message,]);
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
            'description' => $request->description
            ]);

        $message = 'success';
        $uuid = $request->uuid;
        // Tampilkan data Workmeeting
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->get();
        return view('halo.workmeeting-edit', ['message' => $message, 'date' => $request->date, 'workmeeting' => $workmeeting, 'user' => $user]);
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
        return view('halo.workmeeting-add', ['message' => $message, 'workmeeting' => $workmeeting, 'user' => $user]);
    }
}
