<!-- /resources/views/alert.blade.php -->
<div class="alert alert-danger">
    {{ $slot }}
</div>

<!-- 
    这里是 $slot 对应的内容
@component('alert')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent
 -->