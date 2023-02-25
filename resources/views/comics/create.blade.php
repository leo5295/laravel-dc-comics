@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Aggiungi title</label>
          <input type="text" class="form-control" id="" aria-describedby="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi descrizione</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi prezzo</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi serie</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="series">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi data di vendita</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi tipo</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="type">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi link immagine</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="thumb">
        </div>
    
        <div class="form-group">
    
            <button type="submit" class="btn btn-primary">Crea il nuovo Comics</button>
        </div>
      </form>
</div>
@endsection