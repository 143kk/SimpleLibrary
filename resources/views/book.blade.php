@extends('require/common')
@section('content')
    <div class="page-header">
        <h1>{{$book->title}}</h1>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="media detail-media">
                <div class="media-left">
                    <img style="width: 100px;" src="{{config('resources.img')}}/{{$book->lib->id}}/{{$book->author->id}}/{{$book->id}}/cover.jpg?imageView2/1/w/100/h/150/q/75|imageslim" class="media-object">
                </div>
                <div class="media-body">
                    <h3 class="media-heading detail-h3">概要</h3>
                    <p class="text-muted">
                        {{$book->describe}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
           <a class="btn btn-lg btn-success btn-block" href="{{config('resources.epub')}}/{{$book->lib->id}}/{{$book->author->id}}/{{$book->id}}.epub"><i class="glyphicon glyphicon-download-alt"></i> 下载</a>
            <button class="btn btn-lg btn-info btn-block" disabled><i class="glyphicon glyphicon-send"></i> 推送</button>
            <a class="btn btn-lg btn-primary btn-block" href="/read/{{$book->id}}" target="_blank"><i class="glyphicon glyphicon-book"></i> 在线阅读</a>
        </div>
        <div class="col-xs-12">
            <h3>书籍信息</h3>
            <span class="label label-danger">ID: {{$book->id}}</span>
            <span class="label label-default">书名: {{$book->title}}</span>
            <span class="label label-primary">作者: {{$book->author->name}}</span>
            <span class="label label-success">格式: {{$book->format}}</span>
            <span class="label label-info">书库: {{$book->lib->name}}</span>
            <span class="label label-warning">大小: {{$book->size}}</span>
        </div>
        <div class="col-xs-12">
            <h3>插画预览</h3>
            <imgload id="{{$book->id}}" count="{{count($book->img_count)}}" lib_id="{{$book->lib->id}}" author_id="{{$book->author->id}}" img_url="{{config('resources.img')}}"></imgload>
        </div>
    </div>
@stop
@section('some')
    <script src="{{asset("js/app.js")}}"></script>
@stop
