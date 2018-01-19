<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showModal()
    {
        $articles = "bla";
        $user = "nnn";
        return view('modal');
    }
}
