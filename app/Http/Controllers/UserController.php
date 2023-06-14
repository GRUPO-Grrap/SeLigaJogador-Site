<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Advert;
use App\Models\User;

//Controller principal 
class UserController extends Controller
{
    public function index() {
    // Obtém o valor do parâmetro 'search' da requisição
        $search = request('search');

        if($search) {
            // Realiza uma consulta filtrando os anúncios pelo título usando o operador 'like'
            $adverts = Advert::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            // Puxanto todos os dados
            $adverts = Advert::all(); 
        }
        
        // Retorna a view 'index' e passa os anúncios e o valor de pesquisa para a view
        return view('index',['adverts' => $adverts, 'search' => $search]);
    }

    public function announce() {
        // Retorna a view 'events.announce'
        return view('events.announce');
    }

    //Anúncio
    public function store(Request $request) {
        // Cria uma nova instância do modelo Advert
        $advert = new Advert;
        // Preenche os dados do anúncio com base nos dados fornecidos na requisição
        $advert->title = $request->title;
        $advert->date = $request->date;
        $advert->preco = $request->preco;
        $advert->category = $request->category;
        $advert->description = $request->description;

        //Verifica e faz upload das imagens, se existir alguma
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            //define o nome da imagem no modelo Advert
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/announcement'), $imageName);

            $advert->image = $imageName;
        }

        // Usuário logado
        $user = auth()->user();
        $advert->user_id = $user->id;

        // Salva os dados do anúncio no banco de dados
        $advert->save();

        return redirect('/')->with('message', 'Sua Conta foi registrada com sucesso!');
    }

    // Mostra os anúncios por id 
    public function show($id) {
        // Recupera o anúncio com base no ID fornecido
        $advert = Advert::findOrFail($id);
        
        // Recupera o proprietário do anúncio com base no ID do usuário no anúncio
        $advertOwner = User::where('id', $advert->user_id)->first()->toArray(); 
        
        // Retorna a view 'events.show' passando o anúncio e o proprietário do anúncio como dados para a view
        return view('events.show', ['advert' => $advert, 'advertOwner' => $advertOwner,]);

    }

    // Perfil do usuário
    public function profile() {
        // Obtém o usuário autenticado
        $user = auth()->user();
        // Obtém os anúncios associados ao usuário
        $adverts = $user->adverts;
        // Retorna a view 'events.profile' passando os anúncios e o usuário como dados para a view
        return view('events.profile', ['adverts' => $adverts, 'user' => $user]);
    }
    
    //Deleta
    public function destroy($id) {
        // Encontra o anúncio com base no ID fornecido e o exclui
        Advert::findOrFail($id)->delete();
        // Redireciona para a página de perfil
        return redirect('/profile');
    }

    //Edita 
    public function edit($id) {
        // Encontra o anúncio com base no ID fornecido 
        $advert = Advert::findOrFail($id);
        // Retorna a view 'events.edit' passando o anúncio como dado para a view
        return view('events.edit', ['advert' => $advert]);

    }

    // Métodos de termos de uso
    public function termos() {
        return view('termos.termos');
    }

    public function reembolso() {
        return view('termos.reembolso');
    }

    public function privacidade() {
        return view('termos.privacidade');
    }
}