@extends('require/common')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        @forelse($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td>
                    <a href="/author/{{$author->id}}">{{$author->name}}</a>
                </td>
                <td>{{$author->books_count}} 本</td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
    {!! $authors->links() !!}
@stop