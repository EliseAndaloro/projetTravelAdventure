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



<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card" style="height: 400px !important;">
                <div class="card-horizontal">
                    <div class="img-square-wrapper img_container">
                        <img class="img_product" src="{{ asset($wishlist->img) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $wishlist->product_name }}</h4>
                        <p class="card-text">{{ $wishlist->description }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>



@endforeach


@endsection