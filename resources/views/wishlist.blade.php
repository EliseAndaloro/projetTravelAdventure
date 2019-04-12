@extends('layout')

@section ('content')
<link rel="stylesheet" href="{{asset('css/wish.css')}}">
<div class="card">


@foreach($wishlist as $wishlist )
<div class="row">
  <div class="col s6">
    <img class="imgWish" src="{{ asset($wishlist->img) }}">
  </div>
  <div class="col s6">
    <p class="titreArt">{{ $wishlist->product_name }} </p>
    <div class="card-content details">
      <p>{{ $wishlist->description }} </p>
    </div>
    <div class="card-action">
      <input type="submit" class="basket" value="Je Pars en voyage">
    </div>
  </div>
</div>

@endforeach
</div>







@endsection
