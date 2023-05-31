@extends('layouts.secondary-main')

@section('title', 'Editando: ' . $advert->title)

@section('contentSecondary')
    <header>
        @include('layouts._partials.navbar_edit')
    </header>

    <main> 
        <div class="title-edit">
            <h3>Editando: {{ $advert->title }}</h3>
         </div>
          <div class="announce">
            <div>
                <form action="/events/update/{{ $advert->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    {{-- Title --}}
                    <div>
                        <h2>Titulo</h2>
                        <label class="form-label" for="title">Edite seu titulo:</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Digite aqui o nome do seu anuncio" value="{{ $advert->title }}">
                        </div>
                    </div>
                    
                    {{-- Date --}}
                    <div class="mt-3">
                        <h2>Ano de criação da conta</h2>
                        <label for="date">Edite a data de criação da conta:</label>
                        <div  class="input-group input-group-lg mb-1 mt-1">
                            <?php
                                $formattedDate = '';
                                if ($advert->date) {
                                    $dateTime = new DateTime($advert->date);
                                    $formattedDate = $dateTime->format('Y-m-d');
                                }
                            ?>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $formattedDate }}">
                        </div>
                    </div>
                        
                    {{-- Price --}}
                    <div class="mt-3">
                        <h2>Valor</h2>
                        <label for="preco">Edite o valor do seu produto:</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <input type="number" class="form-control" id="preco" name="preco" value="{{ $advert->preco }}">
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <h2>Categoria</h2>
                        <label for="category">Edite a categoria do seu anúncio:</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <select class="form-control" name="category" id="category">
                                <option value="categoria1" {{ $advert->category === 'categoria1' ? 'selected' : '' }}>Free Fire</option>
                                <option value="categoria2" {{ $advert->category === 'categoria2' ? 'selected' : '' }}>Clash of Clans</option>
                                <option value="categoria3" {{ $advert->category === 'categoria3' ? 'selected' : '' }}>Call of Duty</option>
                                <option value="categoria4" {{ $advert->category === 'categoria4' ? 'selected' : '' }}>Fifa 23</option>
                                <option value="categoriaOutros" {{ $advert->category === 'categoriaOutros' ? 'selected' : '' }}>Outros</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <h2>Descrição</h2>
                        <label for="description">Edite a descrição do seu anúncio</label>
                        <div class="input-group input-group-lg mb-1 mt-1">
                            <textarea class="form-control" name="description" id="description">{{ $advert->description }}</textarea>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <h2 for="image"><i class="material-icons">image</i> Imagens</h2>
                        <div  class="input-group input-group-lg mb-1 mt-1">
                            <input class="form-control"  type="file" name="image" id="image">
                            <img style="width: 100%" src="/img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
                        </div>
                        <span>Imagens que não tiverem relção com os anuncio, serão penalizadas</span>
                    </div>
                   
                
                    <button class="btn_send" type="submit">Atualizar</button>
                </form>
            </div>
            
        </div>
    </main>
    
@endsection

