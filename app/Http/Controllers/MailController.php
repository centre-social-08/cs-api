<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(Request $request)
    {
        Mail::to('projetcdacs@gmail.com')->send(new ContactMail($request));
    }
}
