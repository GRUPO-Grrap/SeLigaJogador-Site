<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Advert;
use App\Models\User;

class UserController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $adverts = Advert::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $adverts = Advert::all(); // puxanto todos os dados
        }

        return view('index',['adverts' => $adverts, 'search' => $search]);

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

        // usuário logado
        $user = auth()->user();
        $advert->user_id = $user->id;

        /* salvando dados */
        $advert->save();

        return redirect('/');

    }

    // show
    public function show($id) {

        $advert = Advert::findOrFail($id);

        $advertOwner = User::find($advert->user_id); // Recupera o modelo User com base no ID do usuário

        return view('events.show', ['advert' => $advert, 'advertOwner' => $advertOwner]);

    }
}
