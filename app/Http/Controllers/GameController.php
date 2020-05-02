<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
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

    public function showGamesMenu()
    {
        return view('games.gamesMenu');
    }

    //Tetris
    public function showTetrisMenu()
    {
        return view('games.tetrisMenu');
    }

    public function showTetrisDifficultyMenu()
    {
        return view('games.chooseTetrisLevel');
    }

    public function playNewbieTetris(){
        return view('games.newbieTetris');
    }

    public function playEasyTetris(){
        $user = Auth::user();
        return view('games.easyTetris',['user'=> $user]);
    }

    public function playNormalTetris(){
        return view('games.normalTetris');
    }

    public function playAdvanceTetris(){
        return view('games.advanceTetris');
    }

    public function playHardTetris(){
        return view('games.hardTetris');
    }

    public function playExpertTetris(){
        return view('games.expertTetris');
    }

    public function playExtremeTetris(){
        return view('games.extremeTetris');
    }

    //Memorama
    public function showMemoramaMenu()
    {
        return view('games.memoramaMenu');
    }

    public function showMemoramaDifficultyMenu()
    {
        return view('games.chooseMemoramaLevel');
    }

    public function playNewbieMemorama(){
        return view('games.newbieMemorama');
    }

    public function playEasyMemorama(){
        return view('games.easyMemorama');
    }

    public function playNormalMemorama(){
        return view('games.normalMemorama');
    }

    public function playAdvanceMemorama(){
        return view('games.advanceMemorama');
    }

    public function playHardMemorama(){
        return view('games.hardMemorama');
    }

    public function playExpertMemorama(){
        return view('games.expertMemorama');
    }

    public function playExtremeMemorama(){
        return view('games.extremeMemorama');
    }

    //Duolingo
    public function showDuolingoMenu()
    {
        return view('games.duolingoMenu');
    }

    public function showDuolingoDifficultyMenu()
    {
        return view('games.chooseDuolingoLevel');
    }

    public function playNewbieDuolingo(){
        return view('games.newbieDuolingo');
    }

    public function playEasyDuolingo(){
        return view('games.easyDuolingo');
    }

    public function playNormalDuolingo(){
        return view('games.normalDuolingo');
    }

    public function playAdvanceDuolingo(){
        return view('games.advanceDuolingo');
    }

    public function playHardDuolingo(){
        return view('games.hardDuolingo');
    }

    public function playExpertDuolingo(){
        return view('games.experDuolingo');
    }

    public function playExtremeDuolingo(){
        return view('games.extremeDuolingo');
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
