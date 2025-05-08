<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;
use View;

class MyController
{
    public function goto(Request $req){
        Return View::make("index");
    }
    public function fifth(Request $req){
        if (isset($req->submit)) {
            $data = array(
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'massage' => $req->msg,
            );
            Mail::send('mailTemp', $data, function($massage) use($data){
                $massage->from($data['email']);
                $massage->to('sksajjad250@gmail.com');
                $massage->subject($data['massage']);
            });
            Session::flash("Success!", "Massage has been sent.");
            return Redirect::to('/contact');
        } else {
            Return View::make('fifth');
        }
    }
}