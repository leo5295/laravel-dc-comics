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
            <div>
               <a href="{{ route('comics.edit', $comic) }}">EDIT</a>
            </div>
            <div>
                <form action="{{route('comics.destroy', ['comic' => $comic['id']] )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" id="" value="cancella">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
