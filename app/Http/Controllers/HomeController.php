<?php

namespace App\Http\Controllers;

use Lang;
use App\Models\Handbag;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{

    public function index()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "http://35.184.103.130/public/api/producta",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 1,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            $decode_response = json_decode($response);
            $data['message'] = '';
            $data['api'] = [];
            return view('home.index')->with("data", $data);
        } else {
            $decode_response = json_decode($response);
            $data['message'] = '';
            $data['api'] = $decode_response->data ;
            return view('home.index')->with("data", $data);
        }
    }

    public function home()
    {
        $data['message'] = '';
        return redirect()->route('home.index')->with("data", $data);
    }

    public function portfolio()
    {
        $handbag = Handbag::all();
        $data["title"] = "Handbags";
        $data["handbags"] = $handbag;
        return view('admin.handbag.catalogue')->with("data", $data);
    }
}
