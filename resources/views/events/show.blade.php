@extends('layouts.secondary-main')

@section('title', $advert->title)

@section('contentSecondary')

    <header>
        @include('layouts._partials.navbar_show')
    </header>

    <main>
        <div class="div_img">
            <img class="img_product"  src="/img/announcement/{{ $advert->image }}" alt="">
            <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
        </div>

        <div class="info">
            <h1 class="title">{{ $advert->title }}</h1>
            <p>Valor da Conta</p>
            <h2 class="price">R${{ $advert->preco }}</h2>
        </div>

        <div class="description ">
            <h4>Drescrição da conta</h4>
            <p>
                {{ $advert->description }}
            </p>
        </div>
    
        <div class="d-flex profile-view">
            <div class="user">
                <i class="material-icons img-profile">account_circle</i>
                <h3>{{ $advertOwner['name'] }}</h3>
            </div>
            <div class="info-user">
                <h4>Informações sobre o vendedor</h4>
                <p>X - Email não verificado</p>
                <p>X - Telefone não verificado</p>
                <p>X - Anuncio não verificado</p>
            </div>
            
        </div>
    
        <div>
            <button class="btn_buy">Comprar</button>
        </div>
        

        <div class="div_main_card">
            <h2 class="title_vendas">Recomendados para você!</h2>
            @if(isset($advert))
            {{-- primeiro --}}
                <a href="/events/{{ $advert->id }}">
                    <div class="card" data-categoria="{{ $advert->category }}">
                        
                        <div>
                            <img class="image_card" src="/img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                            <span>Conta criada em: {{ date('Y', strtotime($advert->date)) }}</span>
                        </div>
                        
                        <div class="titulo">
                            <h4 class="title_account"> {{$advert->title}} </h4>
                        </div>
                        
                        <div class="card_price">
                            <p> R$ {{ $advert->preco }} </p> 
                        </div>
                        
                        <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>      

                    </div>
                </a>

                {{-- Segundo --}}
                <a href="/events/{{ $advert->id }}">
                    <div class="card" data-categoria="{{ $advert->category }}">
                        
                        <div>
                            <img class="image_card" src="/img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                            <span>Conta criada em: {{ date('Y', strtotime($advert->date)) }}</span>
                        </div>
                        
                        <div class="titulo">
                            <h4 class="title_account"> {{$advert->title}} </h4>
                        </div>
                        
                        <div class="card_price">
                            <p> R$ {{ $advert->preco }} </p> 
                        </div>
                        
                        <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>      

                    </div>
                </a>

                {{-- Terceiro --}}
                <a href="/events/{{ $advert->id }}">
                    <div class="card" data-categoria="{{ $advert->category }}">
                        
                        <div>
                            <img class="image_card" src="/img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                            <span>Conta criada em: {{ date('Y', strtotime($advert->date)) }}</span>
                        </div>
                        
                        <div class="titulo">
                            <h4 class="title_account"> {{$advert->title}} </h4>
                        </div>
                        
                        <div class="card_price">
                            <p> R$ {{ $advert->preco }} </p> 
                        </div>
                        
                        <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>      

                    </div>
                </a>

    
            @endif
        </div>
        
    
        
    </main>
    <footer>
        @include('layouts._partials.footer')
    </footer>
@endsection