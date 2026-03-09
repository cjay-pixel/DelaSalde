<h1>Posts</h1>

<a href="/posts/create">Create Post</a>

@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
@endforeach