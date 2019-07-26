<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Create a Book</h2>
        <br>
        <form method='POST' action="/save-book">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value=""><br>
                <label for="title">Description:</label>
                <input type="text" name="description" value=""><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>