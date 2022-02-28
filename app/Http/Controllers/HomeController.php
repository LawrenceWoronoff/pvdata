<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Client;

use Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
    }

    public function about_us()
    {
         return view('about_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function cookie()
    {
        return view('cookie');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function our_data()
    {
        return view('our_data');
    }

    public function kofiAPI()
    {
        $business_email  = request()->email;
        $client = new Client();
        $response = $client->request('POST', 'http://ec2-52-14-105-60.us-east-2.compute.amazonaws.com/account/getNewsLetterEmail', [
            'form_params' => [
                'email' => $business_email,
            ]
        ]);

        $statusCode = $response->getStatusCode();
	    $body = $response->getBody()->getContents();
        return $body;

        //return "dsfsdf";

        // $response = $response->getBody()->getContents();
        // echo '<pre>';
        // print_r($response);
    }

    public function sendEmail()
    {
        $data = array();
        $email = "edomkyc777@gmail.com";

        Mail::send('email.sae', $data, function ($message)  use ($email) {
            $message->to($email, 'Reset Password')->subject('Check your password');
            $message->from('danibalilti@gmail.com', 'GrillMan');

            // echo $user->email;
        });
    }
}



