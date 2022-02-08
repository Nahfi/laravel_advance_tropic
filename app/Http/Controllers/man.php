<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\test;

class man extends Controller
{
    //
    public function store(Request $r){

        $detail=[

            'body'=>"hello i am simple test mail"
        ];

        Mail::to($r->email)->send(new test( $detail));


        return redirect()->back()->with('success', 'your message,here');   
    }
}
