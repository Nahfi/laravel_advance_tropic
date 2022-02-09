<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\test;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendNoti;
use Nexmo\Laravel\Facade\Nexmo;
 

class man extends Controller
{
    //
    public function store(Request $r){


     
        Notification::route('mail',$r->email)->notify(new sendNoti());
     
        Nexmo::message()->send([
            'to' => '8801616243666',
            'from' => '01',
            'text' => 'Sending SMS from Laravel. Woohoo!'

        ]);
        return redirect()->back()->with('success', 'your message,here');   
    }
}
