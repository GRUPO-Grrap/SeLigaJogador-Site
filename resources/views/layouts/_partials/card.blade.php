@foreach($adverts as $advert)
   <a href="/events/{{ $advert->id }}">
      <div class="card" data-categoria="{{ $advert->category }}">
         
         <div>
            <img class="image_card" src="img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
            <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
         </div>

         <div class="titulo">
            <h4 class="title_account"> {{$advert->title}} </h4>
         </div>
            
         <div class="card_price">
            <p> R$ {{ $advert->preco }} </p> 
         </div>
            
         <span class="name_user"> {{ Str::limit($advert->description, 40) }} </span>      

      </div>
   </a>
@endforeach
