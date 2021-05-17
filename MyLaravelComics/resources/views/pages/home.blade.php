@extends('layouts.main-layout')
@section('content')

  <div class="jumbotron"></div>



  {{-- sectionfilm --}}
  <section class="container-film">
    <div class="current-series align-center">
      <p class="white">CURRENT SERIES</p>
    </div>
    <div class=" flex-wrap">
      @foreach ($data as $item)
        <div class="box">
          <div class="box-img">
            <img  src="{{$item['thumb']}}" alt="">

          </div>
          <div class="box-title">
           <p class="white" >{{$item['title']}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="center">
      <p class="button">
        <a class="white" href="#">Load More</a>
      </p>
    </div>
 </section>

  {{--section-buy --}}
  <section>
    <div class="buy">
      <ul class="justify-content-spacebetween">
        <li >
         <a href="#" class="align-items-center">
           <img class="img-info" src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
           <p class="white font-size">DIGITAL COMICS</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
            <img class="img-info" src="{{ asset('/storage/assets/buy-comics-merchandisE.png') }}" alt="">
            <p class="white font-size">DC MERCHANDISE</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
           <img class="img-info" src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
           <p class="white font-size">SUBSCRIPTION</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
            <img class="img-info" src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
            <p class="white font-size">COMIC SHOP LOCATOR</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
           <img class="img-info" src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
           <p class="white font-size">DC POWER VISA</p>
         </a>
       </li>
      </ul>

    </div>
  </section>


@endsection
