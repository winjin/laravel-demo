<?php
/**
 * Admin模块路由设置
 *
 * @author yuxingfei<474949931@qq.com>
 */
use Illuminate\Support\Facades\Route;

//后台路由组,Admin模块
Route::group(
    [
        'namespace' => 'Admin', 
        'prefix' => 'admin', 
        // 'middleware' => ['admin.auth']
    ], function() {

    //首页
    Route::get('/', "IndexController@index")->name('admin');
    Route::get('index/index', "IndexController@index")->name('admin.index.index');
    
    //角色管理
    // Route::get('admin_role/index',"AdminRoleController@index")->name('admin.admin_role.index');
    // Route::get('admin_role/index',"AdminRoleController@index");
    Route::get('admin_role/index', function(){
        echo "sss";
        return view('admin.admin_role.index');
    });
    // //角色管理-添加用户-显示界面
    // Route::get('admin_role/add',"AdminRoleController@add")->name('admin.admin_role.add');
    // //角色管理-添加用户
    // Route::post('admin_role/create',"AdminRoleController@create")->name('admin.admin_role.create');
    // //角色管理-修改用户界面
    // Route::get('admin_role/edit/{id}',"AdminRoleController@edit")->name('admin.admin_role.edit');
    // //角色管理-修改用户
    // Route::post('admin_role/update',"AdminRoleController@update")->name('admin.admin_role.update');
    // //角色管理-启用用户
    // Route::post('admin_role/enable',"AdminRoleController@enable")->name('admin.admin_role.enable');
    // //角色管理-禁用用户
    // Route::post('admin_role/disable',"AdminRoleController@disable")->name('admin.admin_role.disable');
    // //角色管理-角色授权界面
    // Route::get('admin_role/access/{id}',"AdminRoleController@access")->name('admin.admin_role.access');
    // //角色管理-角色授权
    // Route::post('admin_role/access_operate',"AdminRoleController@accessOperate")->name('admin.admin_role.access_operate');
    // //角色管理-删除用户
    // Route::post('admin_role/del',"AdminRoleController@del")->name('admin.admin_role.del');

});