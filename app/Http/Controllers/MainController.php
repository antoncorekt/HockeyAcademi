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
        $model->email = $request->get('email');
        $model->name = $request->get('name');
        $model->phone = $request->get('phone');

        if ($model->sendMessage()){
           // $request->session()->flash('alert-success', 'User was successful added!');
          //  return Redirect::back();
            return Redirect::back()->with('mes', "Message sent successfully");
         //   return redirect('ru/modal-enrol');
        }
        else
            return Redirect::back()->with('mes', "Message didn't send");
    }
}
