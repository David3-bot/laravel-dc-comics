<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller {

    function home() {

        $comic = comic::all();

        dump($comic);

        return view('home',[
            // "train" => $train,
        ]);
    }

}
