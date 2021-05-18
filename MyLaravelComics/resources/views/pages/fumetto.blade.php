@extends('layouts.main-layout')
@section('content')

  <div class="under-jumbo">
    <div class="card-fumetto">
      <img  src="{{$elem['thumb']}}" alt="">
    </div>
  </div>
  <div class="container-box-fumetti center ">

    <div class="box-fumetti">
      <h1>{{$elem['title']}}</h1>
      <div class="flex">
        <div class="price align-items-center">
          <p>U.S Price: {{$elem['price']}}</p>
          <p>AVAILABLE</p>
        </div>
        <div class="check align-center">
          <p>Check Availability</p>
        </div>
      </div>
      <p>{{$elem['description']}}</p>

    </div>
    <div>
        <p>ADVERTISEMENT</p>
      <div class="box-fumetti-img">
       <img class="img-info" src="{{ asset('/storage/assets/adv.jpg') }}" alt="">
      </div>
    </div>
  </div>

  <div class="container-talent flex">
    <div class="box-talent">
      <h1 class="title">Talent</h1>
      <div class="art">

      </div>
      <div class="art">

      </div>

    </div>
    <div class="box-specs">
      <h1>Specs</h1>
      <div class="art">

      </div>
      <div class="art">

      </div>
      <div class="art">

      </div>

    </div>

  </div>
@endsection
