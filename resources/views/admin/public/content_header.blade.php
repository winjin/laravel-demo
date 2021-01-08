<!--内容头部-->
<section class="content-header">
    <h1>
        {!! isset($admin['title']) ? $admin['title'] : 'admin' !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.index.index')}}">
            <i class="fa fa-dashboard"></i> 主页</a>
        </li>
        <li class="active">
            {!! isset($admin['title']) ? $admin['title'] : 'Admin' !!}
        </li>
    </ol>
</section>
