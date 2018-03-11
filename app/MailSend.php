<?php

namespace App;

use App\Mail\MessageEnrol;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class MailSend extends Model
{

    public function sendMessage($email, $name, $phone, $nameHock,
            $height, $weight, $age, $addInf){
        //for who

        $arrEmails = ["kozlovsky.anton@gmail.com", "nadine.astakhova@gmail.com","academy@ehlab.org"];

        foreach ($arrEmails as $em){
            Mail::to($em)->send(new MessageEnrol(
                $email, $name, $phone, $nameHock,
                $height, $weight, $age, $addInf, "Запрос на контакт"
            ));
        }



        Mail::to($email)->send(new MessageEnrol(
            $email, $name, $phone, $nameHock,
            $height, $weight, $age, $addInf, "Информация успешно отправлена"
        ));



        if( count(Mail::failures()) > 0 ) {
            return false;
        } else {
            return true;
        }

    }
}
