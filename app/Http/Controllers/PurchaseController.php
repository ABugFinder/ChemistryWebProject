<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Store;
use App\User;
use App\curiosidades;
use App\MisCuriosidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
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
        //
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
        $product = Store::find($request->id)->where('id', $request->id)->first();
        
        if(Purchase::all()->where('id_user', '=', $user->id)
                          ->where('id_store', '=', $request->id)
                          ->count() > 0){

            //return 'ya posee este producto';
            return view('nobuy');

        }else if($user->points < $product->price){

            //return dinero insufuciente
            return view('cantbuy');
        }

        $purchase = Purchase::create([
            'id_user' => $user->id,
            'id_store' => $request->id
        ]);

        $product->ventas++;
        $product->save();

        $user->points -= $request->price;
        $user->save();
        
        //return redirect()->route('myStore');
        return view('yesbuy');
    }

    //Funcion para el gacha de la tienda
    public function gachaStore(){
        $user = Auth::user();
        $curiosidad = Curiosidades::inRandomOrder()->first();

        $user->points -= 250;
        $user->save();

        if(MisCuriosidades::all()->where('id_user', '=', $user->id)
            ->where('id_curiosidad', '=', $curiosidad->id)
            ->count() > 0){

                return view('nobuy');

        } else {
            $micuriosidad = MisCuriosidades::create([
                'id_user' => $user->id,
                'id_curiosidad' => $curiosidad->id,
            ]);
            $micuriosidad->save();

            return view('yesbuy');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    public function showNoBuy(){
        return view('nobuy');
    }

    public function showYesBuy(){
        return view('yesbuy');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
