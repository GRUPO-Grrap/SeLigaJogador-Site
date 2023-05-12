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

        // image
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/announcement'), $imageName);

            $advert->image = $imageName;

        }

        /* salvando dados */
        $advert->save();

        return redirect('/');

    }
}
