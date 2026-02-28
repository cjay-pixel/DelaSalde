<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>All Posts</h1>

@forelse($posts as $post)
    <div style="margin-bottom: 20px;">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->text }}</p>
        <small>Category: {{ $post->category?->name }}</small>
        <hr>
    </div>
@empty
    <p>No posts yet.</p>
@endforelse

</body>
</html>