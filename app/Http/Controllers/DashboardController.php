<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Store;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pointsTop = User::select('username','points')->orderBy('points','desc')->paginate(7);
        $purchases = Store::select('name','ventas')->get();
        $tetrisRecord = User::select('tetrisrecord')->sum('tetrisrecord');
        $memoramaRecord = User::select('memoramarecord')->sum('memoramarecord');

        

        $gamesPoints = [
            'tetrisRecord' => $tetrisRecord,
            'memoramaRecord' => $memoramaRecord
        ];

        
        
        return view('stats',[
            'pointsTop' => $pointsTop->toJson(),
            'purchases' => $purchases,
            'gamesPoints' => $gamesPoints
        ]);
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
        //
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
