@extends('layouts.home')
@section('content')
<div class="intro intro-carousel swiper position-relative">
<div class="swiper-wrapper">
@foreach($userkarausel as $product)
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/image/{{ $product->image }})">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <h1 class="intro-title mb-4 ">
                  <span class="color-b text-center"></span><p class="align-items-center text-center">Selamat Datang Di
                  <br> GBI Tambunan</p> 
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->
@endsection


