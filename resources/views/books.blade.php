@extends('require/common')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>
                    <a href="/book/{{$book->id}}">{{$book->title}}</a>
                    @if($book->format == 'EPUB')
                        <label class="label label-success">EPUB</label>
                    @endif
                </td>
                <td><a href="/author/{{$book->author->id}}">{{$book->author->name}}</a></td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
    {!! $books->links() !!}
@stop
