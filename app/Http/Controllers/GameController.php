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
        $user = Auth::user();
        return view('games.newbieTetris',['user'=> $user]);
    }

    public function playEasyTetris(){
        $user = Auth::user();
        return view('games.easyTetris',['user'=> $user]);
    }

    public function playNormalTetris(){
        $user = Auth::user();
        return view('games.normalTetris',['user'=> $user]);
    }

    public function playAdvanceTetris(){
        $user = Auth::user();
        return view('games.advanceTetris',['user'=> $user]);
    }

    public function playHardTetris(){
        $user = Auth::user();
        return view('games.hardTetris',['user'=> $user]);
    }

    public function playExpertTetris(){
        $user = Auth::user();
        return view('games.expertTetris',['user'=> $user]);
    }

    public function playExtremeTetris(){
        $user = Auth::user();
        return view('games.extremeTetris',['user'=> $user]);
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
        $user = Auth::user();
        return view('games.newbieMemorama',['user'=> $user]);
    }

    public function playEasyMemorama()
    {
        $user = Auth::user();
        return view('games.easyMemorama',['user'=> $user]);
    }

    public function playNormalMemorama(){
        $user = Auth::user();
        return view('games.normalMemorama',['user'=> $user]);
    }

    public function playAdvanceMemorama(){
        $user = Auth::user();
        return view('games.advanceMemorama',['user'=> $user]);
    }

    public function playHardMemorama(){
        $user = Auth::user();
        return view('games.hardMemorama',['user'=> $user]);
    }

    public function playExpertMemorama(){
        $user = Auth::user();
        return view('games.expertMemorama',['user'=> $user]);
    }

    public function playExtremeMemorama(){
        $user = Auth::user();
        return view('games.extremeMemorama',['user'=> $user]);
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
