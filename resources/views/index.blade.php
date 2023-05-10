@extends('layouts.main')

@section('title', 'Tela inicial')

@section('content')

    <!--Aqui está o header e o navbar-->
    @include('layouts._partials.navbar')

    <div>
        <h1>O Marketplace para sua conta está aqui!</h1>
        <a href="/events/announce" class="btn btn-dark">Anunciar</a>
        <h3>Vendas</h3>
    </div>
    
    <div class="div_main_card ">
        @include('layouts._partials.card')
        @if(count($adverts) == 0)
            <p>Não tem contas!</p>
        @endif
    </div>
    
    <!--Aqui está o footer e o navbar-->
    @include('layouts._partials.footer')
@endsection