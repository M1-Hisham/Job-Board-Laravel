@extends ('layouts.app')
@section( 'title', 'View Post')

@section ('content')
<div style="text-align: center;">
    <h1>{{ $posts['title'] }}</h1>
    <p>{{ $posts['body'] }}</p>
    <p><strong>Author:</strong> {{ $posts['author'] }}</p>
    <p><strong>Co-Author:</strong> {{ $posts['author2'] }}</p>
    <p><strong>Published on:</strong> {{ $posts['poblished'] }}</p>
    <p><strong>ID:</strong> {{ $posts['id'] }}</p>
    <hr>
    <h1>Comments</h1>
    <!-- button to add comment to this post route to comments/create/post_id -->
    <a href="/comments/create" style="background-color: green; color: white;
        border: none; padding: 5px 5px; text-decoration: none; cursor: pointer;">Add Comment</a>
    <br><br>
    
    <ul>
        @foreach ($posts->comments as $comment)
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
</div>


