@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$single_comic['thumb']}}" alt="{{$single_comic['title']}}">
            <h1 class="title">
                {{$single_comic['series']}}
            </h1>
            <div class="description">
                {{$single_comic['description']}}
            </div>
            <div class="price">
                Price: {{$single_comic['price']}}
            </div>
        </div>
    </div>
</div>
@endsection
