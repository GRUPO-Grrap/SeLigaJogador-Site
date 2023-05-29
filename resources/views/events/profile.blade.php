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
                        @include('layouts._partials.card')
                        <div class="options">
                            <button class="btn btn-edit"><a href="#">Editar</a></button> 
                            <button class="btn btn-delete" ><a href="#">Deletar</a></button> 
                        </div>
                    @endforeach
                </div>
            @else 
                <p>Você ainda não tem anúncios, <a href="/events/announce">anunciar</a></p>
            @endif
        </div>
    </main>

    
@endsection

