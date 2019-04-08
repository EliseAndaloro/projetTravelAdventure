<?php

namespace App\Http\Controllers;

use App\Avis;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $avis =DB::table('avis')
                 ->join('users','user_id','=','users.id')
                 ->select('img', 'name', 'firstname', 'avis')
                 ->get();
      return view('avis', ['avis' => $avis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
      $avis = $_POST ['avis'];
      $img = $_POST ['img'];
      Avis::create([
        'user_id' => $user['id'],
        'name' => $user['name'],
        'avis' => $avis,
        'img' => $img,
      ]);

      // $avis = Avis::create($request->all());
      return redirect()->action('AvisController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function edit(Avis $avis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avis $avis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avis $avis)
    {
        //
    }
}
