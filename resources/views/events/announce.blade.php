@extends('layouts.secondary-main')

@section('title', 'Anunciar conta')

@section('contentSecondary')
    @include('layouts._partials.navbar_secundary')
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" 
              style="
              background-color: #fafafa;
              color: #1a0d42a1;
              border: solid 1px #1a0d42a1;" aria-current="page" href="#">Conta</a>
            </li>
          
            </li>
            <li class="nav-item" >
              <a class="nav-link active" 
              style="
              background-color: #FF66C4; 
              color: white; 
              border: solid 1px #FF66C4;" href="#">Anuncio</a>
            </li>
        </ul>
    </div>

    <div>
        <form action="/events" method="POST" style="border: solid 2px #FF66C4">
            @csrf
            <div>
                <span>icone aqui</span>
                <h2>Anúncio</h2>
                <label for="title">Escolha um título para seu anúncio:</label>
                <input type="text" id="title" name="title" placeholder="Digite aqui o nome do seu anuncio">
                <span>Por exemplo: conta Free Fire, rank da sua conta, nome do jogador atribuição</span>
            </div>

            <div>
                <h2>Ano de criação da conta</h2>
                <label for="date">isira a data de criação da conta</label>
                <input type="date" id="date" name="date" placeholder="R$0,00">
            </div>

            <div>
                <h2>Valor</h2>
                <label for="preco">Valor do anúncio</label>
                <input type="number" id="preco" name="preco" placeholder="R$0,00">
            </div>

            <div>
                <h2>Categoria</h2>
                <label for="category">Escolha a categoria do seu anúncio</label>
                    <select name="category" id="category">
                        <option value="0">Free Fire</option>
                        <option value="1">Clash of Clans</option>
                        <option value="2">Call of Duty</option>
                        <option value="3">Fifa 23</option>
                    </select>
            </div>

            <div>
                <h2>Descrição</h2>
                <label for="description">Drescreva seu anúncio</label>
                <span>Adicionar contatospessoais como WhataApp, Discord, Facebook, ou qualquer outro meio de comunicação fará com que o seu anúncio seja aprovado</span>
                <textarea name="description" id="description"></textarea>
            </div>

{{--             <div>
                <h2>Imagens</h2>
                <input type="file" name="" id="">
                <span>observação</span>
            </div> --}}

            <div>
                <h2>Contrato</h2>
                <p>Aqui é o Contrato</p>
                <input type="checkbox"  placeholder="R$0,00">
            </div>

            <button type="submit">Finalizar</button>
        </form>
    </div>
@endsection

