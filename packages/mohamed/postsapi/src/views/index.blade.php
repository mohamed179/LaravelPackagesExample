<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    @foreach($posts as $post)
        <p>title: {{$post->title}}</p>
        <p>body: {{$post->body}}</p>
        <br><br>
    @endforeach
</body>
</html>
