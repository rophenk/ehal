<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Models\SpeakersModel;
use App\Models\WorkmeetingModel;

class EmailController extends Controller
{
    public function send(Request $request)
    {
    	
    	$request->speaker_uuid = 'e56225b6-b1be-4e65-86c2-20543222b939';
    	$request->workmeeting_uuid = '241db408-d1d0-4685-b6f3-06cb51d3a007';

    	$speakers = SpeakersModel::where('uuid', $request->speaker_uuid)->first();
    	$workmeeting = WorkmeetingModel::where('uuid', $request->workmeeting_uuid)->first();

    	$explode_input_date = explode("-",$workmeeting->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $destination_email = $speakers->email;
        
        $data = array(
	        'speakers_name' => $speakers->name,
	        'speakers_email' => $speakers->email,
	        'workmeeting_uuid' => $workmeeting->uuid,
	        'workmeeting_name' => $workmeeting->name, 
	        'workmeeting_location' => $workmeeting->location,
	        'workmeeting_description' => $workmeeting->description, 
	        'date' => $date
	    );

        //Mail::queue('emails.template', $data, function ($message) use ($speakers, $workmeeting) {
        Mail::send('emails.template', $data, function ($message) use ($speakers, $workmeeting) {

	        $message->from('hal@pertanian.go.id', 'Hubungan Antar Lembaga - Kementerian Pertanian');

	        $message->to($speakers['email'])->subject('[HALO-KEMENTAN]'.$workmeeting['name']);

	    });
        return "Your email has been sent successfully";
        //return view('emails.template', ['speakers' => $speakers, 'workmeeting' => $workmeeting, 'date' => $date]);
    }
}
