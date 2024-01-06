<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $fromEmail = 'customer@rascarsumatera.co.id';
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
        $this->name = $details['name'];
        $this->email = $details['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('customer@rascarsumatera.co.id', $this->name)->replyTo($this->email, $this->name)->subject('Customer Mengirim Pesan')->view('emails.myTestMail');
    }
}
