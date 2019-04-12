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
        $user = Auth::user();
        $wishlist = DB::table('wishlist')
                    ->where('userwish_id', $user->id)
                    ->join('products','wishprod_id','=','products.id')
                    ->join('users','userwish_id','=','users.id')
                    ->select('products.id','product_name', 'description', 'img')
                    ->get();
        return view('wishlist' , ['wishlist'=>$wishlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createByAjax(Request $request)
    {
      $user = Auth::user();
      
      if(isset($user)){
          $productId = $request->query('product_id');
          
          Wishlist::create([
              'wishprod_id' =>$productId,
              'userwish_id' => $user['id']    
          ]);
      }      
    }
    
    public function removeByAjax(Request $request)
    {
        $user = Auth::user();
        
        if(isset($user)){
            $productId = $request->query('product_id');
            
            Wishlist::where([
                ['wishprod_id', $productId],
                ['userwish_id', $user->id]
            ])->delete();
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
