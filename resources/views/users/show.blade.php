@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="media-object rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item"><a href="#" class="nav-item">TimeLine</a></li>
                <li class="nav-item"><a href="#" class="nav-item">Followings</a></li>
                <li class="nav-item"><a href="#" class="nav-item">Followers</a></li>
            </ul>
        </div>
    </div>
@endsection