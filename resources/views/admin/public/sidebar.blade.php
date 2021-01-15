<!-- left menu -->

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/avatar.png')}}" class="img-circle" alt="用户头像">
            </div>
            <div class="pull-left info">
                <!-- <p>{{isset($admin['user']['nickname']) ? $admin['user']['nickname'] : ''}}</p> -->
                <p>管理员</p>
                <a><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <form method="get" class="sidebar-form" id="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索菜单" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">导航菜单</li>
            <li class='active'>
                <a href='{{ url("/admin") }}'>
                    <i class='fa fa-home'></i><span>后台首页</span>
                </a>
            </li>
            <!-- <li>
                <a href='javascript:void(0);'>
                    <i class='fa fa-sliders'></i><span>轮播管理</span>
                </a>
            </li> -->
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-users'></i><span>用户模块</span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='javascript:void(0);'>
                            <i class='fa fa-user'></i><span>用户管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='javascript:void(0);'>
                            <i class='fa fa-th-list'></i><span>用户等级管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-users'></i><span>角色模块</span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href="">
                            <i class='fa fa-user'></i><span>角色管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='javascript:void(0);'>
                            <i class='fa fa-th-list'></i><span>角色</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-newspaper-o'></i>
                    <span>
                        新闻模块
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/article/index.html'>
                            <i class='fa fa-list'></i>
                            <span>文章管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/article_category/index.html'>
                            <i class='fa fa-list'></i>
                            <span>文章分类管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/tag/index.html'>
                            <i class='fa fa-list'></i>
                            <span>标签管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-shopping-bag'></i>
                    <span>
                        商城模块
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/brand/index.html'>
                            <i class='fa fa-list'></i>
                            <span>品牌管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/goods/index.html'>
                            <i class='fa fa-list'></i>
                            <span>商品管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/goods_category/index.html'>
                            <i class='fa fa-list'></i>
                            <span>商品分类管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/order/index.html'>
                            <i class='fa fa-list'></i>
                            <span>订单管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/express/index.html'>
                            <i class='fa fa-list'></i>
                            <span>快递管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/deliver_address/index.html'>
                            <i class='fa fa-list'></i>
                            <span>收货地址管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-snowflake-o'></i>
                    <span>
                        杂项演示
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/demo/email.html'>
                            <i class='fa fa-mail-forward'></i>
                            <span>邮件发送</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/demo/sms.html'>
                            <i class='fa fa-comment'></i>
                            <span>短信发送</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/demo/qrcode.html'>
                            <i class='fa fa-qrcode'></i>
                            <span>二维码生成</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-wechat'></i>
                    <span>
                        微信模块
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/we_chat/index.html'>
                            <i class='fa fa-book'></i>
                            <span>功能概述</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-th-list'></i>
                    <span>
                        人事管理
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/staff/index.html'>
                            <i class='fa fa-address-book'></i>
                            <span>员工管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/position/index.html'>
                            <i class='fa fa-address-card'></i>
                            <span>职位管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/department/index.html'>
                            <i class='fa fa-users'></i>
                            <span>部门管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='treeview'>
                <a href='javascript:void(0);'>
                    <i class='fa fa-desktop'></i>
                    <span>
                        系统管理
                    </span>
                    <span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>
                </a>
                <ul class='treeview-menu'>
                    <li>
                        <a href='/admin/admin_user/index.html'>
                            <i class='fa fa-user'></i>
                            <span>用户管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/admin_role/index.html'>
                            <i class='fa fa-group'></i>
                            <span>角色管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/admin_menu/index.html'>
                            <i class='fa fa-align-justify'></i>
                            <span>菜单管理</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/admin_log/index.html'>
                            <i class='fa fa-keyboard-o'></i>
                            <span>操作日志</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/admin_user/profile.html'>
                            <i class='fa fa-smile-o'></i>
                            <span>个人资料</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/generate/index.html'>
                            <i class='fa fa-code'></i>
                            <span>代码生成</span>
                        </a>
                    </li>
                </ul>
            </li> -->
        </ul>

    </section>
</aside>