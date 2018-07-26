<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class AccessTokenController extends Controller
{
    public function index(){
        return view('accesstoken.index');
    }
    public function makeRequest(Request $request){
        $email=$request->input('email');
        $url=url('sample');
        $token="08988928349";

        Mail::send('emails.tokenrequest',[
            'email'=>$email,
            'url'=>$url,
            'token'=>$token
        ], function($m) use ($email){
            $m->to($email);
            $m->subject('Access Token Request');
            $m->cc('pokharelanish123@gmail.com');
        });
        return redirect('sample');
}
}
