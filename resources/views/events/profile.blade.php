@extends('layouts.secondary-main')

@section('title', 'Perfil')

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_secundary')
    </header>


    <main>
        <div class="my-information">
            <h1>aqui é meu perfil</h1>
            <p>Olá </p>
        </div>
        <div class="my-announce">
            <h1>Meus Anúncios</h1>
            @if(count($adverts) > 0)
                <div class="card-options">
                    @foreach ($adverts as $advert)
                        <div class="card" data-categoria="{{ $advert->category }}">
            
                            <div>
                            <img class="image_card" src="img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                            <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
                            </div>
                            
                            <div class="titulo">
                            <h4 class="title_account"> {{$advert->title}} </h4>
                            </div>
                            
                            <div class="card_price">
                            <p> R$ {{ $advert->preco }} </p> 
                            </div>
                            
                            <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>      
                
                        </div>
                        <div class="options">
                            <button class="btn btn-edit"><a href="/events/edit/{{ $advert->id }}">Editar</a></button> 
                            <form action="/events/{{ $advert->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete" type="submit">Deletar</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @else 
                <p>Você ainda não tem anúncios, <a href="/events/announce">anunciar</a></p>
            @endif
        </div>
    </main>

    
@endsection

