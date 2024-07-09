<!DOCTYPE html>
<html lang="ru">

<head>
    @component('components.MetaTagHeader')
    @endcomponent
    <title>Home</title>
</head>

<body>

    @component('components.header')
    @endcomponent

    <h1>Home</h1>

    @component('components.Posts', ['posts' => $posts])
    @endcomponent

</body>

</html>
