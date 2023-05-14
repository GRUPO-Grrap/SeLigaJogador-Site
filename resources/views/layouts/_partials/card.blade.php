@foreach($adverts as $advert)
   <div class="card" >
      
      <div>
         <img class="image_card" src="img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
         <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
      </div>
         <h4 class="title_account"> {{$advert->title}} </h4>
         <p class="card_price"> R$ {{ $advert->preco }} </p>
         <span class="name_user">User</span>  
      </div>
          
   </div>
@endforeach
