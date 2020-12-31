<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public function index()
    {
        // return view('back.test');
        return view('back.layouts.child');
    }
}
