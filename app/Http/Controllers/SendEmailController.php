<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'message' => $request->message,
    	);

    	Mail::to('crystalboutique99@gmail.com')->send(new SendMail($data));
    	return back()->with('success', 'Thanks for contacting us!');
    }
}
