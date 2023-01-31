@extends('layouts.app')

@section('content')
<div class="container-fluid bg-dark">
    <div class="row d-flex justify-content-center">
        <div class="col-6 rounded-5 bg-primary">
            <div class="d-flex justify-content-end p-4">
                <a class="" href="{{ route('comics.index') }}">
                    <button type="button" class="btn btn-outline-light rounded-5">
                        <i class="fa-solid fa-x"></i>
                    </button>
                </a>
            </div>
            <h1>{{ $comics->title }} (#{{ $comics->id }})</h1>
            <p class="l">{{ $comics->description }}</p>
            <ul class="m-0">
                <li class="d-flex justify-content-center"><img class="w-25 py-2" src="{{ $comics->thumb }}"></li>
                <li><strong>Prezzo:</strong> {{ $comics->price }}</li>
                <li><strong>Serie:</strong> {{ $comics->series }}</li>
                <li><strong>In vendita:</strong> {{ $comics->sale_date }}</li>
                <li><strong>TIpo:</strong> {{ $comics->type }}</li>
                <li><strong>Data inserimento:</strong> {{ $comics->created_at }}</li>
                <li><strong>Ultima modifica:</strong> {{ $comics->updated_at }}</li>
            </ul>
            <div class="d-flex justify-content-around p-3">
                <div>
                    <a class="" href="{{ route('comics.index') }}">
                        <button type="button" class="btn btn-outline-light">Modifica
                            <i class="bi bi-pen-fill ps-2"></i></i>
                        </button>
                    </a>
                </div>
                <div>
                    <form action="{{ route('comics.destroy', $comics->id) }}" method="POST">
                        @csrf()
                        @method('delete')
                        <button class="btn btn-danger">Elimina
                            <i class="bi bi-trash3 ps-3"></i></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection