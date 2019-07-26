<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of all the books titles</h1>

    <table class="table">
        <!-- thead -->
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- tbody -->
        <tbody>
            @foreach($books as $book)
            <tr>
                <td><a href="/show/{{$book->id}}">{{$book->id}}</a></td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <a href="/edit/{{$book->id}}">
                        Edit
                    </a>
                    <a href="/delete/{{$book->id}}">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>