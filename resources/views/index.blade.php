@extends('layouts.main')

@section('title', 'Tela inicial')

@section('content')

    <!--Aqui está o header e o navbar-->
    <header>
        @include('layouts._partials.navbar')
    </header>
    
    <main>
        <section class="content_top">
            <div class="content_top_text">
              <h2 class="content_top_title">O Marketplace para sua conta está aqui!</h2>
              <h3 class="content_top_subtitle">Venda sua conta com com a gente jogador!</h3>
              <a href="/events/announce"><button class="content_top_button">Anunciar</button></a>
            </div>
        </section>
        
        <div class="category">
            <h2 class="titulo_category">Categorias populares</h2>
            <div class="carousel">
                @include('layouts._partials.category')
            </div>
        </div>

        <div>
            @if($search)
                <h3>você buscou por: {{ $search }}</h3>
            @else
                <h3>as melhores contas aqui!</h3>
            @endif
        </div>

        <div class="div_main_card ">
            <h2 class="titulo_vendas">Vendas</h2>
            @include('layouts._partials.card')
            @if(count($adverts) == 0 && $search)
                <p>Não foi possível encotrar nenhum evento com {{ $search }} <a href="/">Olhar todos!</a> </p>
            @elseif(count($adverts) == 0)
                <p>Não tem contas!</p>
            @endif
        </div>
    </main>
    
    <!--Aqui está o footer-->
    <footer>
        @include('layouts._partials.footer')
    </footer>
    
@endsection