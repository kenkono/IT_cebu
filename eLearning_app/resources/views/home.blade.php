@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <!-- user profile -->
        <div class="col-sm-4">
            <div class="card user-profile">
                <div class="card-body">
                    <div class="text-center">
                        <div class="avatar">
                            <div class="default">
                                <img src="/images/{{ Auth::user()->avatar }}" style="width:100px;height:100px;">
                            </div>
                        </div>

                        <div class="py-2">
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                        <div class="py-2">
                            <p><a href="/user/edit/{{ Auth::user()->id }}" class="btn btn-primary">Edit Profile</a></p>
                        </div>
                        <div class="py-2">
                            <p><a href="/user/edit/password/{{ Auth::user()->id }}" class="btn btn-primary">Change Password</a></p>
                        </div>
                        

                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="/user/followinglist">{{ Auth::user()->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="/user/followerslist">{{ Auth::user()->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contents -->
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h1>Learning contents</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>Manner</div>
                            </div>
                            <div class="col-sm-6">
                                <div>1/5</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>Finance</div>
                            </div>
                            <div class="col-sm-6">
                                <div>3/5</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>Culture</div>
                            </div>
                            <div class="col-sm-6">
                                <div>0/5</div>
                            </div>
                        </div>
                        <p><a href="" class="btn btn-primary">Select Contents</a></p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
