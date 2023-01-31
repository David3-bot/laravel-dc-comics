@extends('layouts.app')

@section('content')
  <h1 class="d-flex justify-content-between">
    Lista prodotti

    <a href="{{ route('comics.create') }}" class="btn btn-primary">
      <i class="fas fa-plus"></i>
      Aggiungi
    </a>
  </h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>Disponibile</th>
        <th>Serie</th>
        <th>Data di uscita</th>
        <th>Tipo</th>
        <th>Thumbnail</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($comics as $comic)
        <tr>
          {{--
            $product è un istanza del model Product.
            pertanto possiamo usare la freccia -> per leggere i
            valori delle varie colonne.
            Nulla vieta di usare le quadre [] come se fosse un
            array associativo
          --}}
          <td>{{ $comic['title'] }}</td>
          {{-- Taglio il testo in modo che abbia massimo 50 caratteri.
            Se ne ha di più vengono mostrati i ... --}}
          <td>{{ Str::limit($comic->description, 50) }}</td>
          <td>€ {{ $comic->price }}</td>
          <td>{{ $comic->available === 1 ? 'Si' : ' No' }}</td>
          <td>{{ $comic['series'] }}</td>
          <td>{{ $comic['sale_date'] }}</td>
          <td>{{ $comic['type'] }}</td>
          <td><img src="{{ $comic['thumb'] }}" alt=""></td>
          {{--<td class="text-nowrap">
             La funzione route() crea l'url completo per arrivare su una pagina.
            Occore quindi passare il name delle rotta che vogliano.
            Siccome la rotta "show" si aspetta un parametro dinamico dell'uri, obbligatorio,
            questo lo passiamo come secondo argomento della funzione route(nome_rotta, valore_parametro_dinamico) --}}
          {{--<a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link">
              <i class="fas fa-eye"></i>
            </a>

            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link">
              <i class="fas fa-pencil"></i>
            </a>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form d-inline-block">
              @csrf()
              @method('delete')

              <button class="btn btn-danger">
                <i class="fas fa-trash"></i>
              </button>
            </form>--}}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <script>
  // recuperiamo l'elemnto html del form
  const forms = document.querySelectorAll(".delete-form");
  forms.forEach((form) => {
    // aggiungiamo un event listener sul submit
    form.addEventListener("submit", function(e) {
      // blocchiamo il comportamento di default
      e.preventDefault();
      // chiediamo all'utente di confermare
      const conferma = confirm("Sei sicuro di voler cancellare questo prodotto? Proprio sicuro sicuro?");
      // Se conferma, inviamo il form
      if (conferma === true) {
        form.submit();
      }
    })
  })
</script>
@endsection