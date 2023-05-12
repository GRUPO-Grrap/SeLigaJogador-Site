@foreach($adverts as $advert)
   <div class="card" >
      
      <div class="content_image_card">
         <img class="image_card" src="img/announcement/{{ $advert->image }}" alt="{{ $advert->title }}">
         <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
      </div>

         <h4 class="title_account"> {{$advert->title}} </h4>
         
         <div class="card_price">
            <p> R$ {{ $advert->preco }} </p>
         </div>
         
         <span class="name_user">User</span>
         
   </div>
@endforeach
