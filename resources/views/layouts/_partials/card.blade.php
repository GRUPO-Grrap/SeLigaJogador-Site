@foreach($adverts as $advert)
   <div class="card" >
      
      <div class="img_card">
         <img src="img/img_card.png" alt="#">
         <span>Conta criada em: {{ date('Y'), strtotime($advert->date) }}</span>
      </div>

         <h4 class="title_account"> {{$advert->title}} </h4>
         
         <div class="card_price">
            <p> R$ {{ $advert->preco }} </p>
         </div>
         
         <span class="name_user">User</span>
         
   </div>
@endforeach
