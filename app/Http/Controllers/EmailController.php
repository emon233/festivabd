<?php

namespace App\Http\Controllers;

use Session;
use App\Mail\EmailSender;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('shahirul.kabir@gmail.com')->send(new EmailSender($request));
        
        Session::flash('success', "Thank You for your Query. We'll Contact you soon");
        
        return redirect()->back();
    }
}
