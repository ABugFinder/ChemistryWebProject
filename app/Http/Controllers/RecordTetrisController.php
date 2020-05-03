<?php

namespace App\Http\Controllers;

use App\RecordTetris;
use Illuminate\Http\Request;

class RecordTetrisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tetrisLeaderboard');
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
     * @param  \App\RecordTetris  $recordTetris
     * @return \Illuminate\Http\Response
     */
    public function show(RecordTetris $recordTetris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecordTetris  $recordTetris
     * @return \Illuminate\Http\Response
     */
    public function edit(RecordTetris $recordTetris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecordTetris  $recordTetris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecordTetris $recordTetris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecordTetris  $recordTetris
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordTetris $recordTetris)
    {
        //
    }
}
