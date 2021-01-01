<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function sendMail($request)
    {
        $details = [
            'name'=>$request->name,
            'email'=> $request->email,
            'subject'=>$request->subject,
            'tile'=>$request->tile,
        ];
        return $details;
    }
    public function build()
    {
        return $this->subject('CakeBaker','Don hang cua ban');
    }
}
