@extends('layout')

@section('body')

<h2>Edit Book</h2>
<br>
<form method='POST' action="/edit-save/{{$suggestion->id}}">
    @csrf
    <div class="form-group">
        <label for="title">Author:</label>
        <input class="form-control" type="text" name="author" value="{{$suggestion->author}}"><br>
        <label for="title">Suggestion:</label>
        <input class="form-control" type="text" name="content" value="{{$suggestion->content}}"><br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-primary" href="/">Back</a>
    </div>
</form>

@endsection