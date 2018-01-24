<?php

namespace App;

use App\Mail\MessageEnrol;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class MailSend extends Model
{
    public $email;
    public $name;
    public $phone;

    public function sendMessage(){
        //for who
        Mail::to($this->email)->send(new MessageEnrol($this->email, $this->name, $this->phone));
        return true;
    }
}
