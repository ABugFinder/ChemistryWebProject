<?php

namespace App\Http\Controllers;
use App\User;
use App\Store;
use App\Purchase;

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

    public function showGamesMenu(){
        return view('games.gamesMenu');
    }

    // Tutoriales

    public function showTutoTetris(){
        return view('games.tutoTetris');
    }

    public function showTutoMemorama(){
        return view('games.tutoMemorama');
    }

    public function showTutoQuiz(){
        return view('games.tutoQuiz');
    }

    //Tetris
    public function showTetrisMenu(){
        
        return view('games.tetrisMenu');
    }

    public function showTetrisDifficultyMenu(){

        $expert = Auth::user()->store()->where('purchases.id_store', '6')->count();
        $extreme = Auth::user()->store()->where('purchases.id_store', '8')->count();

        return view('games.chooseTetrisLevel',[
            'expert' => $expert,
            'extreme' => $extreme
        ]);
    }

    public function playNewbieTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.newbieTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playEasyTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.easyTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
        ]);
    }

    public function playNormalTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.normalTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playAdvanceTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.advanceTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playHardTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.hardTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playExpertTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.expertTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playExtremeTetris(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.extremeTetris',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playTetrisTest(){
        return view('games.tetrisTest');
    }

    public function playTetrisInfinite(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '2')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '4')->count();

        return view('games.tetrisInfinite', [
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    //Memorama
    public function showMemoramaMenu(){
        return view('games.memoramaMenu');
    }

    public function showMemoramaDifficultyMenu(){

        $expert = Auth::user()->store()->where('purchases.id_store', '5')->count();
        $extreme = Auth::user()->store()->where('purchases.id_store', '7')->count();

        return view('games.chooseMemoramaLevel',[
            'expert' => $expert,
            'extreme' => $extreme
        ]);
    }

    public function playNewbieMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.newbieMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playEasyMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.easyMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playNormalMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.normalMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playAdvanceMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.advanceMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playHardMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.hardMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playExpertMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.expertMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playExtremeMemorama(){
        $user = Auth::user();

        $cyber = Auth::user()->store()->where('purchases.id_store', '1')->count();
        $medieval = Auth::user()->store()->where('purchases.id_store', '3')->count();

        return view('games.extremeMemorama',[
            'user'=> $user,
            'cyber' => $cyber,
            'medieval' => $medieval
            ]);
    }

    public function playMemoramaTest(){
        return view('games.memoramaTest');
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
        $user = Auth::user();
        return view('games.newbieDuolingo',['user'=> $user]);
    }

    public function playEasyDuolingo(){
        $user = Auth::user();
        return view('games.easyDuolingo',['user'=> $user]);
    }

    public function playNormalDuolingo(){
        $user = Auth::user();
        return view('games.normalDuolingo',['user'=> $user]);
    }

    public function playAdvanceDuolingo(){
        $user = Auth::user();
        return view('games.advanceDuolingo',['user'=> $user]);
    }

    public function playHardDuolingo(){
        $user = Auth::user();
        return view('games.hardDuolingo',['user'=> $user]);
    }

    public function playExpertDuolingo(){
        $user = Auth::user();
        return view('games.expertDuolingo',['user'=> $user]);
    }

    public function playExtremeDuolingo(){
        $user = Auth::user();
        return view('games.extremeDuolingo',['user'=> $user]);
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
