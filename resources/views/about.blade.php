@extends("require/common")
@section("content")
    <div class="page-header">
        <h1>联系 <small>Contact</small></h1>
    </div>
    <div>
        <p>本站所有内容均整理自互联网，如有侵权请及时联系我们进行删除谢谢</p>
        <p><address>Mail: <a href="mailto:{{config('resources.email')}}">{{config('resources.email')}}</a></address></p>
    </div>
@stop