<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // if (Session::has("username"))
        //     return redirect("/admin");
        // else
        return view('welcome');
    }
}
