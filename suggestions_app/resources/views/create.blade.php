@extends('layout')

@section('body')
<h2>Create a Suggestion</h2>
<br>
<form method='POST' action="/store">
    @csrf
    <div class="form-group">
        <label for="title">author:</label>
        <input class="form-control" type="text" name="author" value=""><br>
        <label for="title">suggestion:</label>
        <input class="form-control" type="text" name="content" value=""><br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-primary" href="/">Back</a>
    </div>
</form>
@endsection