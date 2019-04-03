<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        if ($products->categorie == 'sejour'){
            return view('sejour', ['produits' => $products]);
        }
        elseif($products->categorie == 'weekend'){
            return view('weekend', ['produits' => $products]);
        }
        elseif($products->categorie == 'randonne'){
            return view('randonne', ['produits' => $products]);
        }
        else{
            return "oups";
        }
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
        else{
            return "Fonctionnalités non autorisées ! ";
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
            return "Article crée !!!!!!!!!";
        }
        else{
            return "zieifjrzoùifhoeùfhrg!";
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
        //
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
        else{
            return "Fonctionnalités non autorisées ! ";
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
