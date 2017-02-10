<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Models\SpeakersModel;
use App\Models\WorkmeetingModel;
use DB;

class EmailController extends Controller
{
    
    public function form(Request $request)
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

        return view('halo.email-form', [
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

    public function formQuestion(Request $request)
    {
        $user       = $request->user();
        $uuid       = $request->uuid;
        $message    = $request->message;
        $file = "kementan.json";

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        if(file_exists($file)) {
            $data = json_decode(file_get_contents($file));
            $kementan = $data->data;
        } else {
            $client = new Client();
            $res    = $client->request('GET', env('TANDEM_URL').'/api/v1/list-users', []);
            $body   = $res->getBody();
            $data   = json_decode($body);
            $kementan = $data->data;
            file_put_contents($file, $body);
        }

        return view('halo.email-form-question', [
            'workmeeting' => $workmeeting,
            'message'     => $message,
            'kementan'    => $kementan, 
            'user'        => $user
            ]);

    }

    public function formAnswer(Request $request)
    {
        $user       = $request->user();
        $uuid       = $request->uuid;
        $message    = $request->message;
        $file = "kementan.json";

        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)
                       ->first();

        if(file_exists($file)) {
            $data = json_decode(file_get_contents($file));
            $kementan = $data->data;
        } else {
            $client = new Client();
            $res    = $client->request('GET', env('TANDEM_URL').'/api/v1/list-users', []);
            $body   = $res->getBody();
            $data   = json_decode($body);
            $kementan = $data->data;
            file_put_contents($file, $body);
        }

        return view('halo.email-form-Answer', [
            'workmeeting' => $workmeeting,
            'message'     => $message,
            'kementan'    => $kementan, 
            'user'        => $user
            ]);

    }

    public function process(Request $request)
    {
        $user           = $request->user();
        $uuid           = $request->uuid;
        $message        = $request->message;    
        $speakers_id    = $request->speakers_id;

        $speakers_email_address = array();
        $assistant_email_address = array();

        $in = join(',', array_fill(0, count($speakers_id), '?'));
        
        $speakers_email = DB::select('SELECT `id`, `email` FROM `speakers` WHERE `id` IN ('.$in.')', $speakers_id);

        /* get speakers email */
        foreach ($speakers_email as $email) {
            if(!empty($email))
            {
                $speakers_email_address[] = $email;
            }
        }
        
        $assistant_email = DB::select('SELECT `email1`, `email2` FROM `assistant` WHERE `speakers_id` IN ('.$in.') AND `email1` IS NOT NULL', $speakers_id);
        
        /* get assistant email */
        foreach ($assistant_email as $email_assistant) {
            if(!empty($email_assistant->email1))
            {
                $assistant_email_address['email'][] = $email_assistant->email1;
            }

            if(!empty($email_assistant->email2))
            {
                $assistant_email_address['email'][] = $email_assistant->email2;
            }
        }

        /* get workmeeting name */
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)->first();
        $explode_input_date = explode("-",$workmeeting->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $data = array(
            'workmeeting_uuid' => $workmeeting->uuid,
            'workmeeting_name' => $workmeeting->name, 
            'workmeeting_location' => $workmeeting->location,
            'workmeeting_description' => $workmeeting->description, 
            'date' => $date
        );
        /* Direct Sending Email
        Mail::send('emails.template', $data, function ($message) use ($speakers_email, $assistant_email, $workmeeting) { */

        /* Queue Sending The Email */
        Mail::queue('emails.template', $data, function ($message) use ($speakers_email, $assistant_email, $workmeeting) {

            $message->from('hal@pertanian.go.id', 'Hubungan Antar Lembaga - Kementerian Pertanian');

            foreach ($speakers_email as $email) {
                $message->to($email->email);
            }

            foreach ($assistant_email as $assistant_email) {
                if(!empty($assistant_email->email1))
                {
                    $message->cc($assistant_email->email1);
                }
                if(!empty($assistant_email->email2))
                {
                    $message->cc($assistant_email->email2);
                }
            }

            $message->subject('[HALO-KEMENTAN]'.$workmeeting['name']);

        });

        /* save sending email history log to database */

        foreach ($speakers_email as $speakersmail) {

            $sespri_email = DB::select('SELECT `email1`, `email2` FROM `assistant` WHERE `speakers_id`= '.$speakersmail->id.' AND `email1` IS NOT NULL');

            if(!empty($sespri_email))
            {
                $sespri_address = $sespri_email;
            } else {
                $sespri_address = NULL;
            }

            foreach ($sespri_email as $email_sespri) {
                if(!empty($email_sespri->email1))
                {
                    $sespri_email_address['email'][] = $email_sespri->email1;
                }

                if(!empty($email_sespri->email2))
                {
                    $sespri_email_address['email'][] = $email_sespri->email2;
                }
            }

            DB::table('email_log')->insert(
                [
                    'workmeeting_id'  => $workmeeting->id, 
                    'speakers_id'     => $speakersmail->id,
                    'assistant_email' => json_encode($sespri_address)
                ]
            );
        }

        $message = "email_sent";

        return view('halo.email-sent', [
            'speakers_email'    => $speakers_email,
            'assistant_email'   => $assistant_email, 
            'workmeeting'       => $workmeeting,
            'message'           => $message, 
            'date'              => $date,
            'user'              => $user
            ]);
    }

    public function processQuestion(Request $request)
    {
        $user           = $request->user();
        $uuid           = $request->uuid;
        $message        = $request->message;    
        $speakers_email = $request->speakers_email;

        $speakers_email_address = array();

        /* get workmeeting name */
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)->first();
        $explode_input_date = explode("-",$workmeeting->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $data = array(
            'workmeeting_uuid' => $workmeeting->uuid,
            'workmeeting_name' => $workmeeting->name, 
            'workmeeting_location' => $workmeeting->location,
            'workmeeting_description' => $workmeeting->description, 
            'date' => $date
        );
        /* Direct Sending Email
        $sending = Mail::send('emails.template-question', $data, function ($message) use ($speakers_email, $workmeeting) { */

        /* Queue Sending The Email */
        Mail::queue('emails.template-question', $data, function ($message) use ($speakers_email, $workmeeting) {

            $message->from('hal@pertanian.go.id', 'Hubungan Antar Lembaga - Kementerian Pertanian');

            foreach ($speakers_email as $email) {
                $message->to($email);
            }

            $message->subject('[HALO-KEMENTAN][PERTANYAAN]'.$workmeeting['name']);

        });
        /* save sending email history log to database 

        foreach ($speakers_email as $speakersmail) {

            $sespri_email = DB::select('SELECT `email1`, `email2` FROM `assistant` WHERE `speakers_id`= '.$speakersmail->id.' AND `email1` IS NOT NULL');

            if(!empty($sespri_email))
            {
                $sespri_address = $sespri_email;
            } else {
                $sespri_address = NULL;
            }

            foreach ($sespri_email as $email_sespri) {
                if(!empty($email_sespri->email1))
                {
                    $sespri_email_address['email'][] = $email_sespri->email1;
                }

                if(!empty($email_sespri->email2))
                {
                    $sespri_email_address['email'][] = $email_sespri->email2;
                }
            }

            DB::table('email_log')->insert(
                [
                    'workmeeting_id'  => $workmeeting->id, 
                    'speakers_id'     => $speakersmail->id,
                    'assistant_email' => json_encode($sespri_address)
                ]
            );
        }*/

        $message = "email_sent";

        return view('halo.email-question-sent', [
            'speakers_email'    => $speakers_email,
            'workmeeting'       => $workmeeting,
            'message'           => $message, 
            'date'              => $date,
            'user'              => $user
            ]);
    }

    public function processAnswer(Request $request)
    {
        $user           = $request->user();
        $uuid           = $request->uuid;
        $message        = $request->message;    
        $speakers_email = $request->speakers_email;

        $speakers_email_address = array();

        /* get workmeeting name */
        $workmeeting = WorkmeetingModel::where('uuid', $request->uuid)->first();
        $explode_input_date = explode("-",$workmeeting->date);
        $date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];

        $data = array(
            'workmeeting_uuid' => $workmeeting->uuid,
            'workmeeting_name' => $workmeeting->name, 
            'workmeeting_location' => $workmeeting->location,
            'workmeeting_description' => $workmeeting->description, 
            'date' => $date
        );
        /* Direct Sending Email
        $sending = Mail::send('emails.template-answer', $data, function ($message) use ($speakers_email, $workmeeting) { */

        /* Queue Sending The Email */
        Mail::queue('emails.template-answer', $data, function ($message) use ($speakers_email, $workmeeting) {

            $message->from('hal@pertanian.go.id', 'Hubungan Antar Lembaga - Kementerian Pertanian');

            foreach ($speakers_email as $email) {
                $message->to($email);
            }

            $message->subject('[HALO-KEMENTAN][JAWABAN]'.$workmeeting['name']);

        });
        /* save sending email history log to database 

        foreach ($speakers_email as $speakersmail) {

            $sespri_email = DB::select('SELECT `email1`, `email2` FROM `assistant` WHERE `speakers_id`= '.$speakersmail->id.' AND `email1` IS NOT NULL');

            if(!empty($sespri_email))
            {
                $sespri_address = $sespri_email;
            } else {
                $sespri_address = NULL;
            }

            foreach ($sespri_email as $email_sespri) {
                if(!empty($email_sespri->email1))
                {
                    $sespri_email_address['email'][] = $email_sespri->email1;
                }

                if(!empty($email_sespri->email2))
                {
                    $sespri_email_address['email'][] = $email_sespri->email2;
                }
            }

            DB::table('email_log')->insert(
                [
                    'workmeeting_id'  => $workmeeting->id, 
                    'speakers_id'     => $speakersmail->id,
                    'assistant_email' => json_encode($sespri_address)
                ]
            );
        }*/

        $message = "email_sent";

        return view('halo.email-answer-sent', [
            'speakers_email'    => $speakers_email,
            'workmeeting'       => $workmeeting,
            'message'           => $message, 
            'date'              => $date,
            'user'              => $user
            ]);
    }

    public function send(Request $request)
    {
    	
    	$request->speaker_uuid = '7f223690-44e5-c07a-bdaf-dfab8b0a8fb3';
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
        return "Your email has been sent successfully to : ".$speakers['email'];
        //return view('emails.template', ['speakers' => $speakers, 'workmeeting' => $workmeeting, 'date' => $date]);
    }

    public function testMail()
    {

        //sending email with the php mail()
        mail('rophenk@gmail.com', 'Test Mail dengan PHP native', 'testing');

    }
}
