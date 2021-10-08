<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail(Request $request){
        $contenu =[
            'email' => $request->email,
            'password' =>$request->password,
            'checked' =>$request->checked,
        ];

        Mail::to("elias@molengeek.com")->send(new Email($contenu));
    }
}
