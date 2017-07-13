@extends('require/common')
@section('content')
    <div>
        <ul>
            @forelse($libs as $lib)
                <li>
                    <h3><small>#{{$lib->id}}</small> {{$lib->name}}</h3>
                    <p>该书库下共有书籍{{$lib->books_count}}本</p>
                    <p class="lead">{{$lib->desc}}</p>
                </li>
            @empty
            @endforelse
        </ul>
    </div>
@stop