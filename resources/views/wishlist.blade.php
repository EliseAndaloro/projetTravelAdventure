@extends('layout')

@section ('content')

<div>
@foreach($wishlist as $wishlist ) 

<p>{{ $wishlist->product_name }} </p></div>
@endforeach

@endsection