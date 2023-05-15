@foreach($adverts as $advert)
   <a href="/events/{{ $advert->id }}">
      <div class="card" >
         
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

         <span class="name_user">User</span>      
         
      </div>
   </a>
@endforeach
