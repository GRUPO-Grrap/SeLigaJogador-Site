@extends('layouts.main')

@section('title', 'Tela inicial')

@section('content')

    <!--Aqui está o header e o navbar-->
    @include('layouts._partials.navbar')

    <h1>O Marketplace para sua conta está aqui!</h1>
    <a href="/announce" class="btn btn-dark">Anunciar</a>

    <!--Aqui está o footer e o navbar-->
    @include('layouts._partials.footer')
@endsection