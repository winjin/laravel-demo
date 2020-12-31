<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Users;

class UserController extends Controller
{
    //
    public function __construct()
    {
        // 放中间件 过滤 
    }

    public function index(Users $user)
    {
        return view('back.user');
    }
}
