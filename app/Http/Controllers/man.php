<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\test;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendNoti;
 

class man extends Controller
{
    //
    public function store(Request $r){

        // $detail=[

        //     'body'=>"hello i am simple test mail"
        // ];

        // Mail::to($r->email)->send(new test( $detail));

        // Notification::send($r->email, new sendNoti());
        Notification::route('mail', $r->email) ->notify( new sendNoti());
        return redirect()->back()->with('success', 'your message,here');   
    }
}
