<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\WorkmeetingModel;
use App\Models\WorkmeetingDocumentModel;
use App\Models\WorkmeetingQuestionModel;
use DB;

class DocumentController extends Controller
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
        $user        = $request->user();
        $uuid        = $request->uuid;
        $message     = $request->message;

        $workmeeting = WorkmeetingModel::where('uuid', $uuid)
                       ->first();

        $doclist     = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

        return view('halo.document-add', [
            'message'     => $message, 
            'workmeeting' => $workmeeting, 
            'doclist'     => $doclist, 
            'user'        => $user
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
        $user        = $request->user();
        $uuid        = $request->uuid;
        $message     = $request->message;

        $workmeeting = WorkmeetingModel::where('uuid', $uuid)
                       ->first();

        $uploadfile  = $_FILES["upload_file"]["tmp_name"];

        $files       = $request->file('upload_file');

        $url         = config('app.url');

        $fileput     = Storage::disk('halo')->put("/document/".$request->uuid."/".$files->getClientOriginalName(), file_get_contents($files));

          
        if($fileput == TRUE)
        {
            $document = new WorkmeetingDocumentModel;
            $document->uuid = Uuid::uuid4();
            $document->workmeeting_id = $workmeeting->id;
            $document->title = $files->getClientOriginalName();
            $document->url = $url."/halo/document/".$request->uuid."/".$files->getClientOriginalName();
            $document->type = $request->type;
            $document->save();
        }
          
        if($document->save() == TRUE) {
            $message = 'success';
        } else {
            $message = 'failed';
        }

        $doclist     = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

          return view('halo.document-add', [
            'message'     => $message, 
            'workmeeting' => $workmeeting, 
            'doclist'     => $doclist, 
            'user'        => $user
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user        = $request->user();
        $uuid        = $request->uuid;
        $doc_uuid    = $request->doc_uuid;
        $message     = $request->message;

        $docname     = WorkmeetingDocumentModel::where('uuid', $doc_uuid)
                       ->first();

        Storage::disk('halo')->delete("/document/".$request->uuid."/".$docname->title);

        $doc_delete  = WorkmeetingDocumentModel::where('uuid', $doc_uuid)->delete();

        $workmeeting = WorkmeetingModel::where('uuid', $uuid)
                       ->first();

        $doclist     = WorkmeetingDocumentModel::where('workmeeting_id', $workmeeting->id)
                       ->get();

        $message = 'deleted';

        return view('halo.document-add', [
            'message'     => $message, 
            'workmeeting' => $workmeeting, 
            'doclist'     => $doclist, 
            'user'        => $user
        ]);
    }
}
