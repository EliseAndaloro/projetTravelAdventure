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
    <form method="get" action="{{ action('ProductController@show' , $wishlist->id) }}">
      <input type="submit" class="basket" value="Je Pars en voyage">
    </form>
    </div>
  </div>
</div>
<form class="form-horizontal" method="POST"
  action="{{ route('wishlist.destroy', '$wishlist->wish_id') }}">
  {{ csrf_field() }} {{ method_field('DELETE') }}
  <a class="btn btn-primary" data-toggle="collapse"
    href="#collapseExample" role="button" aria-expanded="false"
    aria-controls="collapseExample"><i class="small material-icons">delete</i></a>

</form>

@endforeach








@endsection
