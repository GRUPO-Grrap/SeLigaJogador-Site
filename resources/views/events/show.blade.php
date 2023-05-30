@extends('layouts.secondary-main')

@section('title', $advert->title)

@section('contentSecondary')

    <header>
        @include('layouts._partials.navbar')
    </header>

    <main>
        <div class="div_img">
            <img class="img_product"  src="/img/announcement/{{ $advert->image }}" alt="">
            <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
        </div>

        <div class="info">
            <h1 class="title">{{ $advert->title }}</h1>
            <h4 class="price">R${{ $advert->preco }}</h4>
        </div>

        <div class="description ">
            <h4>Drescrição da conta</h4>
            <p>
                {{ $advert->description }}
            </p>
        </div>

        <div class="profile-view">
            <h3>{{ $advertOwner['name'] }}</h3>
        </div>

        <div>
            <button class="btn_buy">Comprar</button>
        </div>
        
        
    </main>
@endsection