<!DOCTYPE html>
<html lang="ru">

<head>
    @component('components.MetaTagHeader')
    @endcomponent
    <title>Document</title>
</head>

<body>
    @component('components.Posts', ['posts' => $posts])
    @endcomponent

</body>

</html>
