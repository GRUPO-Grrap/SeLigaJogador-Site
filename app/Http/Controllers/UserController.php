<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Advert;

class UserController extends Controller
{
    public function index() {

        // puxanto todos os dados
        $adverts = Advert::all();

        return view('index',['adverts' => $adverts]);

    }

    public function announce() {
        return view('events.announce');
    }

    public function store(Request $request) {

        $advert = new Advert;

        $advert->title = $request->title;
        $advert->date = $request->date; 
        $advert->preco = $request->preco;
        $advert->category = $request->category;
        $advert->description = $request->description;
        /* $advert->description = $request->description; img */

        /* salvando dados */
        $advert->save();

        return redirect('/');

    }
}
