<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendContactMailRequest;
use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendContactMail extends Controller
{
    public function sendContactMail(SendContactMailRequest $request){
        // コントローラー内
        Log::debug(env("MAIL_USERNAME"));

        $validated = $request->validated();
        $name = $validated["name"];
        $message= $validated["body"];
        $email = $validated["email"];
        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new ContactAdminMail($name, $message, $email));
        Mail::to($email)->send(new ContactUserMail($name, $message, $email));

        return view("emails.thank");
    }
}
