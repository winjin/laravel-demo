<?php
/**
 * Back end Role Page Controller
 *
 * @author Justin <84252802@qq.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// class AdminRoleController extends BaseController
class AdminRoleController extends Controller
{
    // public function __construct()
    // {
    //     // parent::__construct();

    // }

    public function index()
    {
        // return view('admin.role.index',$data);
        return view('admin.admin_role.index');
    }

    public function add()
    {
        return view('admin.admin_role.add');
    }
}