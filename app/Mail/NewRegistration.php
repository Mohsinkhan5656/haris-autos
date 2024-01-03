<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $url;
    public $message;
    public $subject_type;
    public $to_email;
    public $app_name;
    public $email_subject;

    /**
     * Create a new message instance.
     */
    public function __construct($userData)
    {
        $this->queue = 'emails';
        $this->url = config('app.url');
        $this->name = $userData['name'];
        $this->email = $userData['email'];
        $this->phone = $userData['phone'];
        $this->message = $userData['message'];
        $this->subject_type = $userData['subject'];
        $this->to_email = config('app.admin_email');
        $this->app_name = config('app.name');
        $this->email_subject = config('app.email_subject');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-registration')
            ->subject($this->email_subject)
            ->to(
                $this->to_email
            );
    }
}
