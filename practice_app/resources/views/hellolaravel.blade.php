<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Blade</title>
</head>
<body>
    @foreach($blogs as $blog)
        {{$blog->title}}<br>
        {{$blog->description}}<br>
    @endforeach
</body>
</html>