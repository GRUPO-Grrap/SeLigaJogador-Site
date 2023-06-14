@extends('layouts.main')

@section('title', 'Tela inicial')

@section('content')

    <!--Aqui está o header e o navbar-->
    <header>
        @include('layouts._partials.navbar')
        <section class="content_top">
            <div class="content_top_text">
              <h2 class="content_top_title">O Marketplace para sua conta está aqui!</h2>
              <h3 class="content_top_subtitle">Venda sua conta com com a gente, jogador!</h3>
              @auth
              <a href="/events/announce"><button class="content_top_button">Anunciar</button></a>
              @endauth
              @guest
              <button class="btn_modal_account" data-bs-toggle="modal" data-bs-target="#staticBackdropTwo">Criar uma conta agora mesmo!</button>
              @endguest
            </div>
        </section>
    </header>
    
    <main>
        @include("auth.loginModal")
        @include("auth.registerModal")
        @include("auth.passwords.resetModal")
        
        @if(session('message'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var successModal = new bootstrap.Modal(document.getElementById('msgSucessful'));
                    successModal.show();
                });
            </script>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="msgSucessful" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>

                    <div class="modal-body msgBody">
                        <div>
                            <h2 class="msgScs">Sua Conta foi registrada com sucesso!</h2>
                            <p>Verifique seus dados da conta cadastrada com nosso suporte</p>
                        </div>
                        <div>
                            <a href="https://wa.me/5569993231388" target="_blank">
                                <button class="btn btn-contact">
                                    <i class="material-icons">smartphone</i>
                                    Suporte
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category">
            <h2 class="title_category">Categorias populares</h2>
            <div class="carousel">
                @include('layouts._partials.category')
            </div>
        </div>

        <div class="title_result">
            @if($search)
                <h3>você buscou por: {{ $search }}</h3>
            @else        
            @endif
        </div>

        <div class="div_main_card">
            <h2 class="title_vendas">Vendas</h2>
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