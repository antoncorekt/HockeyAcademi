<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(Request $request){
        return view('auth/login');
    }

    public function authenticate(Request $request) {
        //if (Auth::attempt(['email' =>$request->get('email'), 'password' => $request->get('password'), 'type' => User::METHODIST])) {
            if ($this->getUser($request->get('email'),$request->get('password'))) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withInput()->with('message', 'Ошибка входа! Возможно email и/или пароль не верны');
        }
    }
    private function getUser($email, $pass){
        if("tata@mail.ru" == $email && "1234" == $pass)
            return true;
        else
            return false;
    }

}
