<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendEmail()
    {
        $recipientEmail = 'dainq1002@gmail.com';
        $messageBody = "Test send mail";

        $senderEmail = Config::where('name', 'MAIL_USERNAME')->first();

        Mail::send([], [], function ($message) use ($recipientEmail, $messageBody, $senderEmail) {
            $message->to($recipientEmail)
                ->subject('Subject Here');

            $message->from($senderEmail->value, config('mail.from.name'));
            $message->text($messageBody);
        });

        return response()->json(['message' => 'Email sent successfully']);
    }
}
