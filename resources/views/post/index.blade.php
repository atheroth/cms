@extends('layouts.main')
@section('title', 'Posts')
@section('content')
    @foreach ($posts as $post)
        <div>{{ $post->id }}. <a href="#">{{ $post->title }}</a> | {{ $post->created_at->format('d.m.Y') }}"</div>
    @endforeach
@endsection
