@extends('require/common')
@section('content')
    <h2>作者 <em><a href="/author/{{$author->id}}">{{$author->name}}</a></em> 的书籍共有 {{$author->books_count}} 本</h2>
    @forelse($author->books as $book)
        <div class="box">
            @if($book->has_cover)
            <div class="box-left">
                <img src="{{config('resources.img')}}/{{$book->lib->id}}/{{$book->author->id}}/{{$book->id}}/cover.jpg" class="box-img">
            </div>
            @endif
            <div class="box-content">
                <h4 class="box-heading"><a href="/book/{{$book->id}}">{{$book->title}}</a></h4>
                <p>
                @if($book->describe && !strstr($book->describe,'None'))
                    {{str_limit($book->describe,'400','…………')}}
                @endif
                </p>
            </div>
        </div>
    @empty
    @endforelse
@stop