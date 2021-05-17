@extends('layouts.main-layout')
@section('content')

  <div class="jumbotron"></div>

  {{-- sectionfilm --}}
  <section>
    <div class="container-film">
      <div class="">

      </div>

    </div>
  </section>

  {{--section-buy --}}
  <section>
    <div class="buy">
      <ul class="justify-content-spacebetween">
        <li >
         <a href="#" class="align-items-center">
           <img class="img-info" src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
           <p class="white">DIGITAL COMICS</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
            <img class="img-info" src="{{ asset('/storage/assets/buy-comics-merchandisE.png') }}" alt="">
            <p class="white">DC MERCHANDISE</p>
         </a>
        </li>
        <li>
         <a href="#" class="align-items-center">
          <img class="img-info" src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
          <p class="white">SUBSCRIPTION</p>
        </li>
        <li>
         <a href="#" class="align-items-center">
           <img class="img-info" src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
            <p class="white">COMIC SHOP LOCATOR</p>
        </li>
        <li>
         <a href="#" class="align-items-center">
          <img class="img-info" src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
          <p class="white">DC POWER VISA</p>
       </li>
      </ul>

    </div>
  </section>


@endsection
