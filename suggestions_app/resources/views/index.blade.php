@extends('layout')

@section('body')
<div class="container">
    <h1 class="text-center">List of all the suggestions</h1>
    <p class="text-center"><a href="/create">Add a suggestion</a></p>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Contents</th>
                <th scope="col">Vote</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suggestions as $suggestion)
            <tr class="text-center">
                <td>{{$suggestion->id}}</td>
                <td>{{$suggestion->author}}</td>
                <td>{{$suggestion->content}}</td>
                <td>
                    <span>{{count($suggestion->votes)}}</span>
                    <a href="/upvote/{{$suggestion->id}}" class="btn btn-light">Upvote</a>
                    <a href="/downvote/{{$suggestion->id}}" class="btn btn-dark {{count($suggestion->votes) <= 0 ? 'disabled' : ''}}">Downvote</a>
                </td>
                <td>
                    <a href="/update/{{$suggestion->id}}" class="btn btn-warning">Edit</a>
                    <a href="/delete/{{$suggestion->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
