<!-- 文件保存于 resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            这是主布局的侧边栏。
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>