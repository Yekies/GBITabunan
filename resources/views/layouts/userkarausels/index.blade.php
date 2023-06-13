<div class="swiper-wrapper">
  <div class="col-lg-12">
    @foreach ($userkarausel as $item)
       <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(gambar/{{$item->gambar }})">
      </div>
  </div>
  @endforeach  
  </div>



