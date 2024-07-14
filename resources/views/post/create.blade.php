@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <h5><label class="form-label mt-2">Заголовок</label></h5>
            <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок статьи">
        </div>
        <div class="mb-2">
            <h5><label class="form-label">Содержание статьи</label></h5>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Содержание статьи"></textarea>
        </div>

        <div class="mb-2">
            <h5><label class="form-label">Изображение</label></h5>
            <input type="text" name="image" class="form-control" id="image" placeholder="Ссылка на картинку">
        </div>

        <div class="mb-2">
            <h5><label class="form-label">Лайки</label></h5>
            <input type="text" name="likes" class="form-control" id="likes" placeholder="Количество лайков">
        </div>

        <button type="submit" class="btn btn-success mt-2">Создать</button>
    </form>
@endsection
