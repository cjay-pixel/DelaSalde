<h1>Create Post</h1>

<form method="POST" action="/posts">
    @csrf

    <label>Title</label><br>
    <input type="text" name="title"><br><br>

    <label>Content</label><br>
    <textarea name="content"></textarea><br><br>

    <button type="submit">Save Post</button>
</form>