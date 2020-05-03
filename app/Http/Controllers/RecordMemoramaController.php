<?php

namespace App\Http\Controllers;

use App\RecordMemorama;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RecordMemoramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memoramaLeaderboard');
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
     * @param  \App\RecordMemorama  $recordMemorama
     * @return \Illuminate\Http\Response
     */
    public function show(RecordMemorama $recordMemorama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecordMemorama  $recordMemorama
     * @return \Illuminate\Http\Response
     */
    public function edit(RecordMemorama $recordMemorama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecordMemorama  $recordMemorama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecordMemorama $recordMemorama)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecordMemorama  $recordMemorama
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordMemorama $recordMemorama)
    {
        //
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function updateRecords(Request $request)
    {

        $user = Auth::user();

        $top1 = RecordMemorama::find(1)->where('id', 1)->first();
        $top2 = RecordMemorama::find(2)->where('id', 2)->first();
        $top3 = RecordMemorama::find(3)->where('id', 3)->first();

        if($request->points > $top1->record){
            $top1->record = $request->points;
            $top1->id_user = $user->id;

            $top1->save();
        }else if($request->points > $top2->record){
            $top2->record = $request->points;
            $top2->id_user = $user->id;

            $top2->save();
        }else if($request->points > $top3->record){
            $top3->record = $request->points;
            $top3->id_user = $user->id;

            $top3->save();
        }

        
        return $top3;
        
    }
}
