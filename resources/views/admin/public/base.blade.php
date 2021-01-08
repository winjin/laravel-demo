<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--  -->
    <!-- 强制Chromium内核，作用于360浏览器、QQ浏览器等国产双核浏览器 -->
    <meta name="renderer" content="webkit"/>
    <!-- 强制Chromium内核，作用于其他双核浏览器 -->
    <meta name="force-rendering" content="webkit"/>
    <!-- 如果有安装 Google Chrome Frame 插件则强制为Chromium内核，否则强制本机支持的最高版本IE内核，作用于IE浏览器 -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>

    <title> index </title>

    @include('admin.public.head_css')
    @include('admin.public.head_js')

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- header -->
        @section('header')
            @include('admin.public.header')
        @show
        <!-- sidebar -->
        @section('sidebar')
            @include('admin.public.sidebar')
        @show
        <!-- content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- footer -->
        @section('footer')
            @include('admin.public.footer')
        @show
    </div>
</body>
</html>