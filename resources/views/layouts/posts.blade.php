<!DOCTYPE html>
<html lang="ru">

<head>
    @component('components.MetaTagHeader')
    @endcomponent
    <title>Posts</title>
</head>

<body>

    @component('components.header')
    @endcomponent
    <h1>Posts</h1>
    @component('components.Posts', ['posts' => $posts])
    @endcomponent

</body>

</html>
