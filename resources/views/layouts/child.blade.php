<!-- 文件保存于 resources/views/layouts/child.blade.php -->

@extends('layouts.app')

@section('title', 'wj test')

@section('sidebar')
    @parent

    <p>此处内容将追加到主布局的侧边栏</p>
@endsection

@section('content')

    <p>这是主体内容。</p>
@endsection