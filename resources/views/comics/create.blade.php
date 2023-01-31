@extends('layouts.app')

@section('content')
<div class="container-fluid bg-black">
  <h1 class="text-white">Nuovo Fumetto</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label text-white">Nome</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Descrizione</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Copertina</label>
        <input type="text" class="form-control" name="thumb">
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Prezzo</label>
      <input type="number" step=".01" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Serie</label>
        <input type="text" class="form-control" name="series">
      </div>

    <div class="mb-3">
        <label class="form-label text-white">Data Vendita</label>
        <input type="date" step=".01" class="form-control" name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Tipo</label>
        <input type="text" class="form-control" name="type">
    </div>



    <button class="btn btn-primary" type="submit">Salva prodotto</button>
  </form>
</div>
@endsection