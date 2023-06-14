@extends('layouts.secondary-main')

@section('title', 'Perfil')

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_secundary')
    </header>

    <main>
        <div class="my-information d-flex">
            <div>
                <i class="material-icons my-image">account_circle</i>
            </div>
            <div class="name-user">
                <h1>{{ strtoupper($user->name) }}</h1>
            </div>
        </div>
<<<<<<< HEAD
        </div>
        </div>

=======
>>>>>>> origin/main

        <div class="nav-profile">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Meus Anúncios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Minhas Informações</a>
                </li>
            </ul>
        </div>

        <div class="div_main_card">
            <h1>Todos</h1>
            @if (count($adverts) > 0)
                @foreach ($adverts as $advert)
                    <div class="my-card" data-categoria="{{ $advert->category }}">

                        <div>
                            <img class="image_card" src="img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                            <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
                        </div>

                        <div class="titulo">
                            <h4 class="title_account"> {{ $advert->title }} </h4>
                        </div>

                        <div class="card_price">
                            <p> R${{ $advert->preco }} </p>
                        </div>

                        <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>

                        <div class="options">
                            <button class="btn btn-edit"><a href="/events/edit/{{ $advert->id }}">Editar</a></button>
                            <form action="/events/{{ $advert->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete" type="submit">Deletar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Você ainda não tem anúncios, <a href="/events/announce">anunciar</a></p>
            @endif
        </div>
    </main>


@endsection
