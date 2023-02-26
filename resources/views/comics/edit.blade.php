@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <form action="{{route('comics.update', ['comic' => $comic['id']])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            @if($errors->any())
            <ul class="text-danger">
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Aggiungi title</label>
          <input value="{{ old('title') ?? $comic['title'] }}" type="text" class="form-control" id="" aria-describedby="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi descrizione</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="description">
                value="{{ old('description') ?? $comic['description'] }}"
            </textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi prezzo</label>
            <input value="{{ old('price') ?? $comic['price'] }}" type="text" class="form-control" id="" aria-describedby="" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi serie</label>
            <input value="{{ old('series') ?? $comic['series'] }}" type="text" class="form-control" id="" aria-describedby="" name="series">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi data di vendita</label>
            <input value="{{ old('sale_date') ?? $comic['sale_date'] }}" type="text" class="form-control" id="" aria-describedby="" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi tipo</label>
            <input value="{{ old('type') ?? $comic['type'] }}" type="text" class="form-control" id="" aria-describedby="" name="type">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi link immagine</label>
            <input value="{{ old('thumb') ?? $comic['thumb'] }}" type="text" class="form-control" id="" aria-describedby="" name="thumb">
        </div>
    
        <div class="form-group">
    
            <button type="submit" class="btn btn-primary">Crea il nuovo Comics</button>
        </div>
      </form>
</div>
@endsection