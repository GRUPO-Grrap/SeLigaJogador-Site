@extends('layouts.secondary-main')

@section('title', 'Perfil')

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_secundary')
    </header>

    <div>
        <h1>Meus Anúncios</h1>
        @if(count($adverts) > 0)
            <div>
                @foreach ($adverts as $advert)
                    <p>{{$advert->title}}</p>
                    <a href="#">Editar</a> <a href="#">Deletar</a>
                @endforeach
            </div>
        @else 
            <p>Você ainda não tem anúncios, <a href="/events/announce">anunciar</a></p>
        @endif
    </div>
    
@endsection

