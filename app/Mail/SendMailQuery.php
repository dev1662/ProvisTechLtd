<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailQuery extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    protected $email;
    protected $name;



    /**
     * Create a new message instance.
     */
    public function __construct($name,$email,$message)
    {
        $this->message = $message;
        $this->name = $name;
        $this->email = $email;


    }
    public function build()
    {
        $this->subject('Query from '.$this->name)->markdown('emailTemplate',[
            'message' => $this->message,
            'name' => $this->name,
            'email' => $this->email,

        ]);
    }
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Send Mail Query',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
