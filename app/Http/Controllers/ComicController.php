<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $comics = comic::all();

        return view("comics.index", [
            "comics" => $comics
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dd($data);

        // Prima alternativa.
        // Tramite il metodo fill, assegniamo tutti i valori al nuovo prodotto, automaticamente
        $comics = new Comic();
        // Prende ogni chiave dell'array associativo e ne assegna il valore all'istanza del prodotto
        $comics->fill($data);
        $comics->save();



        return redirect()->route("comics.show", $comics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $comics = Comic::findOrFail($id);
        
 
        return view("comics.show", [
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);

        // sull'istanza del model, il metodo da usare è delete()
        $comics->delete();

        // Un volta eliminato l'elemento dalla tabella, dobbiamo reindirizzare l'utente da qualche parte.
        return redirect()->route("comics.index");
    }
}
