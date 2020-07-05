<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Event;

class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Approval From HEA',
            'body' => 'Your application has been approved. You are ready to go!'
        ];

        $email= DB::table('users')
                ->join('events', 'events.user_id','=', 'users.id')
                ->select('users.email','events.id')
                ->get();

        \Mail::to($email)->send(new SendMail($details));
        return view('emails.thanks');
    }
}