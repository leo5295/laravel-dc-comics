@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <h1 class="title">
                {{$comic['series']}}
            </h1>
            <div class="description">
                {{$comic['description']}}
            </div>
            <div class="price">
                Price: {{$comic['price']}}
            </div>
        </div>
    </div>
</div>
@endsection
