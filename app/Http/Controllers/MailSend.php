<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Event;
use Illuminate\Support\Carbon;

class MailSend extends Controller
{
    public function mailsend($email, $driver, $startDate)
    {
        $day = Carbon::parse($startDate)->format('l');
        $date = Carbon::parse($startDate)->format('d M');
        $time = Carbon::parse($startDate)->format('h:i A');

        $details = [
            'title' => 'Approval From HEA',
            'body' => "Your application has been approved. You are ready to go!
                    Your bus driver is {$driver}. Meet up at {$day}, {$date}, {$time}"
        ];

        \Mail::to($email)->send(new SendMail($details));
        return view('emails.thanks');
    }
}
