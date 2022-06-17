<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SMSController extends Controller
{


    public function send(Request $request)
    {


        if(request()->isMethod("post")){

            return request();
        }

        return view("envio-sms");
    }

    public function smssend(Request $request)
    {

                $request->input('telefonePessoa');
                $request->input('textoPessoa');


                try {

                    $accountsid = getenv('TWILIO_SID');
                    $authtoken = getenv('TWILIO_TOKEN');
                    $twilio_number = getenv('TWILIO_FROM');

                    $client = new Client($accountsid, $authtoken);
                    $client->messages->create($request->input('telefonePessoa'), [
                        'from' => $twilio_number,
                        'body' => $request->input('textoPessoa')]);

                        dd('SMS Sent Successfully.');


                } catch (Exception $e) {
                    dd("Error: ". $e->getMessage());


                }



    }
}
