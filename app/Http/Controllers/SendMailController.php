<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    private $sendMail;
    public function __construct(SendMail $sendMail)
    {
        $this->sendMail = $sendMail;
    }
    public function sendMail(Request $request)
    {
       $this->sendMail->sendMail($request);
        Mail::to("rongvotu@gmail.com")->send(new SendMail($details['email']));
        return redirect()->route('order.list')->width('add','Gửi Thành Công');
    }
}
