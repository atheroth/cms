<h1>Title</h1>
<div class="container">
    @foreach ($posts as $post)
        <div><a href="#">{{ $post->title }}</a></div>
    @endforeach
</div>
