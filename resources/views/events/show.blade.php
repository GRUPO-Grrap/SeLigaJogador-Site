@extends('layouts.secondary-main')

@section('title', $advert->title)

@section('contentSecondary')

    <header>
        @include('layouts._partials.navbar_secundary')
    </header>

    <main>
        <div>
            <img class="m-5" style="width: 500px; height: 300px;" src="/img/announcement/4821515a31ada7963842975039874675.jpg" alt="">
        </div>

        <div>
            <h1>{{ $advert->title }}</h1>
            <h4>Preço R$200</h4>
        </div>

        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex illo nesciunt, 
                aliquid odit aperiam sapiente. Eaque quod vel labore dolor atque architecto ab 
                ex omnis recusandae dicta? Dolores, accusamus id?
            </p>
        </div>
        <div>
            <button class="btn btn-success">Comprar</button>
        </div>
       
    </main>

@endsection