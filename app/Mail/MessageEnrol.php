<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageEnrol extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $name;
    public $phone;
    public $nameHock;
    public $height;
    public $weight;
    public $age;
    public $addInf;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $phone, $nameHock,
            $height, $weight, $age, $addInf, $subject)
    {
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->nameHock = $nameHock;
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
        $this->addInf = $addInf;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.enrol')
            ->from("ehlabenrol@ehlab.org")
            ->subject($this->subject);
    }
}
