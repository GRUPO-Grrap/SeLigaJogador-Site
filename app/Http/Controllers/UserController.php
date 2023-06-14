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
            $adverts = Advert::all(); // Puxanto todos os dados
        }

        return view('index',['adverts' => $adverts, 'search' => $search]);
    }

    public function announce() {
        return view('events.announce');
    }

    public function termos() {
        return view('termos');
    }

    public function reembolso() {
        return view('reembolso');
    }

    public function privacidade() {
        return view('privacidade');
    }

    public function store(Request $request) {

        $advert = new Advert;

        $advert->title = $request->title;
        $advert->date = $request->date;
        $advert->preco = $request->preco;
        $advert->category = $request->category;
        $advert->description = $request->description;

        // Image
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/announcement'), $imageName);

            $advert->image = $imageName;
        }

        // Usuário logado
        $user = auth()->user();
        $advert->user_id = $user->id;

        // Salvando dados
        $advert->save();

        return redirect('/')->with('message', 'Sua Conta foi registrada com sucesso!');
    }

    // show
    public function show($id) {
        // Recupera o anúncio com base no ID fornecido
        $advert = Advert::findOrFail($id);

        // Recupera o proprietário do anúncio com base no ID do usuário no anúncio
        $advertOwner = User::where('id', $advert->user_id)->first()->toArray(); 

        // Retorna a view 'events.show' passando o anúncio e o proprietário do anúncio como dados para a view
        return view('events.show', ['advert' => $advert, 'advertOwner' => $advertOwner,]);

    }




    public function profile() {

        $user = auth()->user();

        $adverts = $user->adverts;

        return view('events.profile', ['adverts' => $adverts]);
    }

    public function destroy($id) {

        Advert::findOrFail($id)->delete();

        return redirect('/profile');
    }

    public function edit($id) {

        $advert = Advert::findOrFail($id);

        return view('events.edit', ['advert' => $advert]);

    }


}

    public function update(Request $request) {

        $data = $request->all();

        // Image
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/announcement'), $imageName);

            $data['image'] = $imageName;
        }

        Advert::findOrFail($request->id)->update($data);

        return redirect('/profile');

    }

}

