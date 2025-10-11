@extends ('layouts.app')

@section('title', 'Comments')


@section ('content')
    <h1>Comments</h1>
    <a href="/comments/create" class="text-blue-500 underline">Add Comment</a>
    <ul>
        @foreach ($comments as $comment)
            <li>
                <strong>{{ $comment->author }}</strong>: {{ $comment->content }}
                {{ $comment->id }} -> {{ $comment->post_id }}

            </li>
            <br>
            <hr>
        </br>
    
        @endforeach
    </ul>
    
@endsection
