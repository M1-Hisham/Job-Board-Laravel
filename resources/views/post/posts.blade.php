@extends('layouts.app')

@section('title', 'Posts')
@section('content')<div style="text-align: center;">
    <h1>Posts</h1>
    <p>Welcome to the posts page! Here are the latest posts:</p>
    <ul>
        <li>Understanding Laravel Middleware</li>
        <li>10 Tips for Effective Remote Work</li>
        <li>The Future of Web Development in 2024</li>
    </ul>
    <hr>
    <h2>All Posts</h2>
    <!-- create button to create new post -->
    <a href="/post/create" style="background-color: green; color: white;
        border: none; padding: 5px 5px; text-decoration: none; cursor: pointer;">Create New Post</a>
    <br><br>
    
    @foreach ($posts as $post)
    <!-- i want to display button to delete the post and view the post details -->

        <div>
            <p><strong>Title:</strong><h1>{{ $post['title'] }}</h1></p>
            <p><strong>Body:</strong><h2>{{ $post['body'] }}</h2></p>
            <p><strong>Author:</strong> {{ $post['author'] }}</p>
            <p><strong>Co-Author:</strong> {{ $post['author2'] }}</p>
            <p><strong>Published on:</strong> {{ $post['poblished'] }}</p>
            <p><strong>ID:</strong> {{ $post['id'] }}</p>
            <!-- Delete button color black go to route post/delete/id-->
            <form action="{{ route('post.destroy', $post['id']) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?');" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">Delete</button>
            </form>
            <a href="/post/{{ $post['id'] }}" style="background-color: blue; color: white; border: none; padding: 5px 10px; text-decoration: none; cursor: pointer;">View Details</a>
            <hr>
        </div>
    
    @endforeach
    <!-- pagination links -->
    <div style="margin-top: 20px;">
        {{ $posts->links() }}
        
</div>
@endsection