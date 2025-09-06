<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendTestMail()
    {
        $data = [
            'title' => 'Test Email from Hyper Connect',
            'body' => 'This is a test email to verify the email sending functionality.',
        ];
        Mail::to('me.nirjhor007@gmail.com')->send(new TestMail($data));

        dd('Test email sent successfully.');
    }
    public function sendOtpByMail()
    {
        $otp = rand(1000, 9999); // Generate a random 4-digit OTP
        $data = [
            'subject' => 'OTP Verification',
            'otp' =>  $otp,
        ];
        Mail::to('me.nirjhor007@gmail.com')->send(new SendOtpMail($data));

        dd('OTP email sent successfully.');
    }
}
