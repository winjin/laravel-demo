<?php
/**
 * Background Home Page Controller
 *
 * @author Justin <84252802@qq.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// class IndexController extends BaseController
class IndexController extends Controller
{
    // public function __construct()
    // {
    //     // parent::__construct();

    // }

    public function index()
    {
        // return view('admin.index.index',$info);
        return view('admin.index.index');
    }

}