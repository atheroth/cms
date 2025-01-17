<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    @include('components.meta-tags')
</head>

<body>
    @include('components.header')

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
</body>

</html>
