@extends('require/common')
@section('content')
    <div class="alert alert-danger" role="alert">
        <strong>错误！</strong>
        {{$message}}
        <button onclick="history.go(-1)" class="btn btn-default pull-right btn-sm">返回上一页</button>
    </div>
@stop