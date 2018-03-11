<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Exception\AuthenticationException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request){
        return view('auth/login');
    }

    public function authenticate(Request $request) {
        if (Auth::attempt(['login' =>$request->get('login'), 'password' => $request->get('password')])) {
            //if ($this->getUser($request->get('email'),$request->get('password'))) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withInput()->with('message', 'Ошибка входа! Возможно email и/или пароль не верны');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }


}
