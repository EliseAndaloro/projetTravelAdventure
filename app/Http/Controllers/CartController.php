<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = $_GET['prodId'];
        $nbpers = $_GET['nbpers'];
        $date = $_GET['trip-start'];
        Cart::create([
            'product_id' =>$product,
            'user_id' => $user['id'],
            'trip_start' => $date,
            'nbpers' => $nbpers,

        ]);
        $id = DB::getPdo()->lastInsertId();

        return redirect()->action('CartController@cart', ['id'=>$id , 'product' =>$product]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart=DB::table('cart')
                    ->where('cart_id', $id)
                    ->join('products','product_id','=','products.id')
                    ->join('users','user_id','=','users.id')
                    ->select('cart_id','trip_start','product_name', 'img', 'name', 'firstname', 'address', 'price', 'city', 'country', 'nbpers', 'description')
                    ->first();

        $cart->total=$cart->price * $cart->nbpers;

        return view('cart' , ['cart'=>$cart]);
    }

    public function cart($id, Product $product)
    {

        $cart=DB::table('cart')
        ->where('cart_id', $id)
        ->join('products','product_id','=','products.id')
        ->join('users','user_id','=','users.id')
        ->select('cart_id','product_name', 'img', 'name', 'firstname', 'address', 'price', 'city', 'country', 'nbpers', 'description')
        ->first();

        $cart->total=$cart->price * $cart->nbpers;

        return view('home' , ['cart'=>$cart]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

 //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
