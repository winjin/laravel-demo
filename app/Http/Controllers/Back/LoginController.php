<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    function __construct(Request $request)
    {
        $this->request = $request;
    }

    function index ()
    {
        return view('back/login');
    }

    // login 
    function login ()
    {
        $input = $this->request->input();
        dd($input);
    }
}
