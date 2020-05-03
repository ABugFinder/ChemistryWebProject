<?php

namespace App\Http\Controllers;

use App\RecordMemorama;
use Illuminate\Http\Request;

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
        //
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
}
