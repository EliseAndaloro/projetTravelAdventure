<?php

namespace App\Http\Controllers;

use App\Wishlist;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            // $wishlist=DB::table('wishlist')
            //             ->where('wish_id', $id)
            //             ->join('products','wishprod_id','=','products.id')
            //             ->join('users','userwish_id','=','users.id')
            //             ->select('wish_id','product_name', 'img', 'price', 'description')
            //             ->first();



            // return view('wishlist' , ['wishlist'=>$wishlist]);
            return "sae pute ! ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = Auth::user();
      if(isset($user)){
      $product = $_GET['wishId'];
      Wishlist::create([
          'wishprod_id' =>$product,
          'userwish_id' => $user['id'],

      ]);



      return redirect()->action('WishlistController@index', ['product' =>$product]);

      // return redirect()->action('WishlistController@show', ['id'=>$id , 'product' =>$product]);
    }
    else{
      return view('../compte');
    }

  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
