@extends('layouts.secondary-main')

@section('title', 'Anunciar conta')

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_secundary')
    </header>

    <main>
        <div class="nav-itens">
            <ul class="nav nav-pills mb-4">

                <li class="nav-item mx-1">
                    <a class="nav-link " aria-current="page" href="#"
                        style="
                  color: #1A0D42;
                  border: solid .5px #1A0D42">Conta</a>
                </li>

                <li class="nav-item"
                    style="
                background-color: #FF66C4;
                border: solid 1px #ff51bc"s>
                    <a class="nav-link" style="color: white" href="#">Anúncio</a>
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
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Digite aqui o nome do seu anuncio">
                        </div>
                        <span>Por exemplo: conta Free Fire, rank da sua conta, nome do jogador ou atribuição.</span>
                    </div>

                    <!--Date-->
                    <div class="mt-3">
                        <h2><i class="material-icons">calendar_month</i> Ano de criação da conta</h2>
                        <label for="date">Insira a data de criação da conta</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input type="date" class="form-control" id="date" name="date" placeholder="R$0,00">
                        </div>
                    </div>

                    <!--Price-->
                    <div class="mt-3">
                        <h2><i class="material-icons">payments</i> Valor</h2>
                        <label for="preco">Valor do anúncio</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input type="number" class="form-control" id="preco" name="preco" placeholder="R$0,00">
                        </div>
                    </div>

                    <div class="mt-3">
                        <h2><i class="material-icons">category</i> Categoria</h2>
                        <label for="category">Escolha a categoria do seu anúncio</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <select class="form-control" name="category" id="category">
                                <option value="categoria1">Free Fire</option>
                                <option value="categoria2">Clash of Clans</option>
                                <option value="categoria3">Call of Duty</option>
                                <option value="categoria4">Fifa 23</option>
                                <option value="categoriaOutros">Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <h2><i class="material-icons">description</i> Descrição</h2>
                        <label for="description">Crie uma descrição para seu anúncio</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <span>Adicionar contatos pessoais como WhatsApp, Discord, Facebook, ou qualquer outro meio de
                            comunicação fará com que o seu anúncio seja aprovado</span>
                    </div>

                    <div class="mt-3">
                        <h2 for="image"><i class="material-icons">image</i> Imagens</h2>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <span>Imagens que não tiverem relação com o anúncio, serão penalizadas</span>
                    </div>

                    <div class="mt-3">
                        <h2><i class="material-icons">article</i> Termos de uso</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <span class="form-check-label" for="flexCheckDefault">
                                Eu li e concordo com os <a href="#">Termos de uso</a> do site Se Liga Jogador
                            </span>
                        </div>
                    </div>

                    <button class="btn_send" type="submit">Finalizar</button>
                </form>
            </div>

        </div>
    </main>

@endsection
