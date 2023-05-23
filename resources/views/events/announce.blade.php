@extends('layouts.secondary-main')

@section('title', 'Anunciar conta')

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_secundary')
    </header>
    
    

    <main> 
        <div class="nav-itens">
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
          <div class="announce">
            <div>
                <form action="/events" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!--Title-->
                    <div>
                        <h2><i class="material-icons">campaign</i> Anúncio</h2>
                        <label class="form-label" for="title">Escolha um título para seu anúncio:</label>
                        <div class="input-group input-group-lg mb-1">
                            <input type="text" class="form-control" id="title" name="title"
                            placeholder="Digite aqui o nome do seu anuncio" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        <span>Por exemplo: conta Free Fire, rank da sua conta, nome do jogador ou atribuição.</span>
                    </div>
                    
                    <!--Date-->
                    <div class="mt-3">
                        <h2><i class="material-icons">calendar_month</i> Ano de criação da conta</h2>
                        <label for="date">Insira a data de criação da conta</label>
                        <div  class="input-group input-group-lg mb-1">
                            <input type="date" class="form-control" id="date" name="date" placeholder="R$0,00">
                        </div>
                    </div>
                        
                    <!--Price-->
                    <div class="mt-3">
                        <h2><i class="material-icons">payments</i> Valor</h2>
                        <label for="preco">Valor do anúncio</label>
                        <div class="input-group input-group-lg mb-1">
                            <input type="number" class="form-control" id="preco" name="preco" placeholder="R$0,00">
                        </div>
                    </div>
                    
                    <div>
                        <h2>Categoria</h2>
                        <label for="category">Escolha a categoria do seu anúncio</label>
                            <select name="category" id="category">
                                <option value="categoria1">Free Fire</option>
                                <option value="categoria2">Clash of Clans</option>
                                <option value="categoria3">Call of Duty</option>
                                <option value="categoria4">Fifa</option>
                                <option value="categoria5">Roblox</option>
                            </select>
                    </div>
        
                    <div>
                        <h2>Descrição</h2>
                        <label for="description">Drescreva seu anúncio</label>
                        <span>Adicionar contatospessoais como WhataApp, Discord, Facebook, ou qualquer outro meio de comunicação fará com que o seu anúncio seja aprovado</span>
                        <textarea name="description" id="description"></textarea>
                    </div>
        
                    <div>
                        <label for="image">Imagens</label>
                        <input type="file" name="image" id="image">
                        <span>observação</span>
                    </div>
        
                    <div>
                        <h2>Contrato</h2>
                        <p>Aqui é o Contrato</p>
                        <input type="checkbox"  placeholder="R$0,00">
                    </div>
        
                    <button type="submit">Finalizar</button>
                </form>
            </div>
        </div>
       
    </main>
    
@endsection

