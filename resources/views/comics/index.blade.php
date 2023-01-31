@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-dark">
        <h1 class="d-flex justify-content-between text-white">
            Lista prodotti

            <a href="{{ route('comics.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Aggiungi
            </a>
        </h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">Nome</th>
                    <th class="text-white">Descrizione</th>
                    <th class="text-white">Prezzo</th>
                    <th class="text-white">Disponibile</th>
                    <th class="text-white">Serie</th>
                    <th class="text-white">Data di uscita</th>
                    <th class="text-white">Tipo</th>
                    <th class="text-white">Thumbnail</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td class="text-white">{{ $comic['title'] }}</td>
                        <td class="text-white">{{ Str::limit($comic->description, 50) }}</td>
                        <td class="text-white">€ {{ $comic->price }}</td>
                        <td class="text-white">{{ $comic->available === 1 ? 'Si' : ' No' }}</td>
                        <td class="text-white">{{ $comic['series'] }}</td>
                        <td class="text-white">{{ $comic['sale_date'] }}</td>
                        <td class="text-white">{{ $comic['type'] }}</td>
                        <td class="text-white"><img class="img-thumb" src="{{ $comic['thumb'] }}" alt=""></td>

                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf()
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash3"></i></i>
                                </button>
                            </form>
                        </td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const forms = document.querySelectorAll(".delete-form");
        forms.forEach((form) => {

            form.addEventListener("submit", function(e) {

                e.preventDefault();

                const conferma = confirm(
                    "Sei sicuro di voler cancellare questo prodotto? Proprio sicuro sicuro?");

                if (conferma === true) {
                    form.submit();
                }
            })
        })
    </script>
@endsection
