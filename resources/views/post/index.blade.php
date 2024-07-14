@extends('layouts.main')
@section('content')
    @foreach ($posts as $post)
        <div>{{ $post->id }}. <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> <span
                class="text-muted">({{ $post->created_at->format('d.m.Y') }})</span></div>
    @endforeach
@endsection
