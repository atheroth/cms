@extends('layouts.main')
@section('content')
    <div><b>ID:</b> {{ $post->id }}</div>
    <div><b>Заголовок:</b> {{ $post->title }}</div>
    <div><b>Содержание:</b> {{ $post->content }}</div>
    <div><b>Картинка:</b> {{ $post->image }}</div>
    <div><b>Лайки:</b> {{ $post->likes }}</div>

    <div class="mt-3"><a href="{{ route('post.index') }}">Вернуться к списку статей</a></div>
@endsection
