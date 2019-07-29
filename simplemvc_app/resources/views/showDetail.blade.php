<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>ID: {{$book->id}}</p>
    <p>Title: {{$book->title}}</p>
    <p>Description: {{$book->description}}</p>
    <span>
        @foreach($book->types as $type)
            <h3>{{ $type->type_name }}</h3>
        @endforeach
    </span>
    <form method="POST" action="/delete/{{$book->id}}">
        @csrf
    <input type="submit" value="delete">
    <a href="edit/{{$book->id}}">edit</a>
</form>
</body>
</html>