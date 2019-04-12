@extends('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/wishlist.css')}}">
@foreach($wishlist as $wishlist )
<!-- <div class="col s12 "> -->
<!--     <h2 class="header"> </h2> -->
<!--     <div class="card horizontal"> -->
      <!--  <div class="card-image" style="width:500px; height:100000000px !important;">-->
<!--         <img src=""> -->
<!--       </div> -->
<!--       <div class="card-stacked"> -->
<!--         <div class="card-content"> -->
<!--           <p> </p> -->
<!--         </div> -->
<!--         <div class="card-action"> -->
<!--           <a href="#">This is a link</a> -->
<!--         </div> -->
<!--       </div> -->
<!--     </div> -->
<!--   </div> -->




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