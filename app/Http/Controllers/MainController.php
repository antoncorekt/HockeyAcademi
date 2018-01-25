<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailFormRequest;
use App\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function showModal()
    {
        return view('others/enrol');
    }

    public function enrolForm(MailFormRequest $request){
        $model = new MailSend();

        if ($model->sendMessage($request->get('email'), $request->get('name'), $request->get('phone'),
            $request->get('nameHock'), $request->get('height'), $request->get('weight'), $request->get('age'),
            $request->get('add'))){
           // $request->session()->flash('alert-success', 'User was successful added!');
          //  return Redirect::back();
            return Redirect::back()->with('mes', "Message sent successfully. С Вами скоро свяжутся");
         //   return redirect('ru/modal-enrol');
        }
        else
            return Redirect::back()->with('mes', "Message didn't send");
    }
}
