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
        $product = $_GET['prodId'];
        $nbpers = $_GET['nbpers'];
        $user = Auth::user();
        Cart::create([
            'product_id' =>$product,
            'user_id' => $user['id'],
            'nbpers' => $nbpers,
            
        ]);                 
        $id = DB::getPdo()->lastInsertId();
        return redirect()->action('CartController@show', ['id'=>$id]);
       
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
                    ->select('product_name', 'img', 'name', 'firstname', 'address', 'price', 'city', 'country', 'nbpers')
                    ->first();
        
        $cart->total=$cart->price * $cart->nbpers;
        
     return view('cart' , ['cart'=>$cart]);
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
    public function update(Request $request, $id)
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
