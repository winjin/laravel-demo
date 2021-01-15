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
        // 'prefix' => 'admin', 
        // 'middleware' => ['admin.auth']
    ], function() {

    //首页
    Route::get('/', "IndexController@index")->name('admin');
    Route::get('index/index', "IndexController@index")->name('admin.index.index');
    
    //角色管理
    Route::get('role/index',"AdminRoleController@index")->name('admin.role.index');
    //角色管理-添加用户-显示界面
    Route::get('role/add',"AdminRoleController@add")->name('admin.role.add');
    //角色管理-添加用户
    Route::post('role/create',"AdminRoleController@create")->name('admin.role.create');
    //角色管理-修改用户界面
    Route::get('role/edit/{id}',"AdminRoleController@edit")->name('admin.role.edit');
    //角色管理-修改用户
    Route::post('role/update',"AdminRoleController@update")->name('admin.role.update');
    //角色管理-启用用户
    Route::post('role/enable',"AdminRoleController@enable")->name('admin.role.enable');
    //角色管理-禁用用户
    Route::post('role/disable',"AdminRoleController@disable")->name('admin.role.disable');
    //角色管理-角色授权界面
    Route::get('role/access/{id}',"AdminRoleController@access")->name('admin.role.access');
    //角色管理-角色授权
    Route::post('role/access_operate',"AdminRoleController@accessOperate")->name('admin.role.access_operate');
    //角色管理-删除用户
    Route::post('role/del',"AdminRoleController@del")->name('admin.role.del');

});