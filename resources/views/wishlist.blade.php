@extends('layout')

@section ('content')

@foreach($wishlist as $wishlist )
<div class="col s12 m7">
    <h2 class="header">{{ $wishlist->product_name }} </h2>
    <div class="card horizontal">
      <div class="card-image" style="width:500px; height:100000000px !important;">
        <img src="{{ asset($wishlist->img) }}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>{{ $wishlist->description }} </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>

@endforeach








@endsection