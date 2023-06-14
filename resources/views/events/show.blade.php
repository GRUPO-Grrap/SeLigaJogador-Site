@extends('layouts.secondary-main')

@section('title', $advert->title)

@section('contentSecondary')

    <?php
    $acess_token = "TEST-1465027986972225-061221-96e6639b4571b953219e0b98ac03ff70-1366472213";

    require_once('../vendor/autoload.php');

    MercadoPago\SDK::setAccessToken($acess_token);

    $item = new MercadoPago\Item();
    $item->title = $advert->title;
    $item->quantity = 1;
    $item->unit_price = $advert->preco ;

    $preference = new MercadoPago\Preference();
    $preference->items = array($item);

    $preference->back_urls = array(
        "success" => 'https://meusite.com/sucess',
        "failure" => 'https://meusite.com/failure',
        "pending" => 'https://meusite.com/pending'
    );

    $preference->notification_url = 'https://meusite.com/notification.php';
    $preference->external_reference = 4545;
    $preference->save();

    $link = $preference->init_point;
    ?>

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
            <button class="btn_buy"><a href={{$link}}>Comprar</a></button>
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