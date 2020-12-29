<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Users;

class UserController extends Controller
{
    //
    public function __construct()
    {}

    public function index(Users $user)
    {
        return $user->table;
    }
}
