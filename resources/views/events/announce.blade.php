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
    
    <form action="#" style="border: solid 2px #FF66C4">
        <div>
            <div>icone aqui</div>
            <h2>Anúncio</h2>
            <p>Escolha um título para seu anúncio</p>
            <input type="text"  placeholder="Digite aqui o nome do seu anuncio">
            <span>Por exemplo: conta Free Fire, rank da sua conta, nome do jogador atribuição</span>
        </div>

        <div>
            <h2>Ano de criação da conta</h2>
            <label>isira a data de criação da conta</label>
            <input type="number"  placeholder="R$0,00">
        </div>

        <div>
            <h2>Valor</h2>
            <p>Valor do anúncio</p>
            <input type="number"  placeholder="R$0,00">
        </div>
        
        <div>
            <h2>Categoria</h2>
            <p>Escolha a categoria do seu anúncio</p>
            <label for="">
                <select>
                    <option value="0">Free Fire</option>
                    <option value="1">Clash of Clans</option>
                    <option value="2">Call of Duty</option>
                    <option value="3">Fifa 23</option>
                </select>
            </label>
        </div>

        <div>
            <h2>Descrição</h2>
            <p>Drescreva seu anúncio</p>
            <span>Adicionar contatospessoais como WhataApp, Discord, Facebook, ou qualquer outro meio de comunicação fará com que o seu anúncio seja aprovado</span>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <h2>Imagens</h2>
            <input type="file" name="" id="">
            <span>observação</span>
        </div>

        <div>
            <h2>Contrato</h2>
            <p>Aqui é o Contrato</p>
            <input type="checkbox"  placeholder="R$0,00">
        </div>

        <button type="submit">Finalizar</button>

    </form>

@endsection

