<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Wishlist;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = Auth::user();

        $products = Product::where('categorie',$name)->get();
        return view('categorie', ['user'=>$user])->withProducts($products);


     





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if($user->is_admin == 1){
            return view('admin');
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
        $user = Auth::user();
        if($user->is_admin == 1){
            Product::create($request->all());
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $product = Product::where('id', $id)->first();

        $wishList = Wishlist::where([
            ['wishprod_id', $id],
            ['userwish_id', $user['id']]
        ])->first();
        
        $productIsFavorite = ($wishList == null ? 'favorite_border' : 'favorite');
        
        return view('detailsproduits', compact('product', 'user', 'productIsFavorite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $user = Auth::user();

        if($user->is_admin == 1){
            return view('editproduct', compact('product'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return "article modif";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $user = Auth::user();
        if($user->is_admin == 1){
            $product->delete();
            return " article supp";
        }
        else{
            return "Fonctionnalités non autorisées ! ";
        }
    }
}
