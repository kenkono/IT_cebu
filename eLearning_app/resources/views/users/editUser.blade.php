@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')

<form action="/user/storeEdit/{{$user->id}}" method="POST" class="m-10">
    <div class="row">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Avatar</label>
            <img src="/images/{{$user->avatar}}" style="width:50px;height:50px;">
        </div>
        <div class="col-md-6">
            
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>   

        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="text-center">
        <button class="create-post btn btn-primary mt-3" type="submit">Edit</button>
    </div>
</form>
@endsection