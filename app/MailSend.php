<?php

namespace App;

use App\Mail\MessageEnrol;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class MailSend extends Model
{
   /* public $email;
    public $name;
    public $phone;
    public $nameHock;
    public $height;
    public $weight;
    public $age;
    public $addInf;*/

    public function sendMessage($email, $name, $phone, $nameHock,
            $height, $weight, $age, $addInf){
        //for who
        Mail::to($email)->send(new MessageEnrol(
            $email, $name, $phone, $nameHock,
            $height, $weight, $age, $addInf
        ));

        if( count(Mail::failures()) > 0 ) {
           return false;
        } else {
            return true;
        }

    }
}
