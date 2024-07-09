@extends('layouts.main')
@section('title', 'Posts')
@section('content')
    @foreach ($posts as $post)
        <div>{{ $post->id }}. <a href="#">{{ $post->title }}</a>. image path: "{{ $post->image }}"</div>
    @endforeach
@endsection
