@extends('layouts.app')

@section('content')
  <h1>Nuovo Fumetto</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Copertina</label>
        <input type="text" step=".01" class="form-control" name="thumb">
    </div>
    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="number" step=".01" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" step=".01" class="form-control" name="series">
      </div>

    <div class="mb-3">
        <label class="form-label">Data Vendita</label>
        <input type="date" step=".01" class="form-control" name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" step=".01" class="form-control" name="type">
    </div>



    <button class="btn btn-primary" type="submit">Salva prodotto</button>
  </form>
@endsection