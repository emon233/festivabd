<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('FestivaBD - Contact Info')
                    ->markdown('emails.contact')
                    ->with([
                        'name' => $this->request['name'],
                        'email' => $this->request['email'],
                        'phone' => $this->request['phone'],
                        'facebook' => $this->request['facebook'],
                        'subject' => $this->request['subject'],
                        'message' => $this->request['message']
                    ]);
    }
}
