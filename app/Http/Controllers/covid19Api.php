<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class covid19Api extends Controller
{
   
    public function index()
    {
        $date = date('Y-m-d');
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://covid-193.p.rapidapi.com/history?country=Colombia&day=".$date,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: covid-193.p.rapidapi.com",
                "x-rapidapi-key: ce19d0164fmsh3d383efc0e85ce5p16dcb1jsnb1a4a3c79541"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $decode_response = json_decode($response);
            //dd($decode_response->response['0']->country);
            return view('covid19.apicovid')->with('data', $decode_response->response['0']);
        }
    }
}
