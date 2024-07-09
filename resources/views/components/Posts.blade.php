<div class="container">
    @foreach ($posts as $post)
        <div><a href="#">{{ $post->title }}</a> : {{ $post->image }}</div>
    @endforeach
</div>
