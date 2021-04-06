<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

// Profiles
Route::get('/myProfile', 'UserController@showMyProfile')->name('myProfile');
Route::get('/userProfile/{id}', 'UserController@showUserProfile');
Route::get('/editMyProfile', 'UserController@showEditProfile')->name('editProfile');
Route::post('/editMyProfile', 'UserController@updateUser')->name('updateUser');


// Store
Route::get('/myStore', 'StoreController@showStore')->name('myStore');
Route::post('/myStore/purchase', 'PurchaseController@store')->name('purchaseTest');
Route::post('/myStore/gachaPurchase', 'PurchaseController@gachaStore') -> name('gachaStore');

// Notifications
Route::get('/myStore/cantbuythis', 'PurchaseController@showNoBuy')->name('nobuy');
Route::get('/myStore/canbuythis', 'PurchaseController@showYesBuy')->name('yesbuy');
Route::get('/myStore/cantbuythis', 'PurchaseController@showCantBuy')->name('cantbuy');

// Games
Route::get('/gamesMenu', 'GameController@showGamesMenu')->name('gamesMenu');

// Tetris
Route::get('/tetrisMenu', 'GameController@showTetrisMenu')->name('tetrisMenu');
Route::get('/tetrisDifficulty', 'GameController@showTetrisDifficultyMenu')->name('tetrisDifficulty');
Route::get('/easyTetris', 'GameController@playEasyTetris')->name('easyTetris');
Route::get('/newbieTetris', 'GameController@playNewbieTetris')->name('newbieTetris');
Route::get('/normalTetris', 'GameController@playNormalTetris')->name('normalTetris');
Route::get('/advanceTetris', 'GameController@playAdvanceTetris')->name('advanceTetris');
Route::get('/hardTetris', 'GameController@playHardTetris')->name('hardTetris');
Route::get('/expertTetris', 'GameController@playExpertTetris')->name('expertTetris');
Route::get('/extremeTetris', 'GameController@playExtremeTetris')->name('extremeTetris');

Route::get('/tetrisTest', 'GameController@playTetrisTest')->name('tetrisTest');
Route::get('/infiniteTetris', 'GameController@playTetrisInfinite')->name('infiniteTetris');

// Memorama
Route::get('/memoramaMenu', 'GameController@showMemoramaMenu')->name('memoramaMenu');
Route::get('/memoramaDifficulty', 'GameController@showMemoramaDifficultyMenu')->name('memoramaDifficulty');
Route::get('/easyMemorama', 'GameController@playEasyMemorama')->name('easyMemorama');
Route::get('/newbieMemorama', 'GameController@playNewbieMemorama')->name('newbieMemorama');
Route::get('/normalMemorama', 'GameController@playNormalMemorama')->name('normalMemorama');
Route::get('/advanceMemorama', 'GameController@playAdvanceMemorama')->name('advanceMemorama');
Route::get('/hardMemorama', 'GameController@playHardMemorama')->name('hardMemorama');
Route::get('/expertMemorama', 'GameController@playExpertMemorama')->name('expertMemorama');
Route::get('/extremeMemorama', 'GameController@playExtremeMemorama')->name('extremeMemorama');

Route::get('/memoramaTest', 'GameController@playMemoramaTest')->name('memoramaTest');

// Duolingo
Route::get('/duolingoMenu', 'GameController@showDuolingoMenu')->name('duolingoMenu');
Route::get('/duolingoDifficulty', 'GameController@showDuolingoDifficultyMenu')->name('duolingoDifficulty');
Route::get('/easyDuolingo', 'GameController@playEasyDuolingo')->name('easyDuolingo');
Route::get('/newbieDuolingo', 'GameController@playNewbieDuolingo')->name('newbieDuolingo');
Route::get('/normalDuolingo', 'GameController@playNormalDuolingo')->name('normalDuolingo');
Route::get('/advanceDuolingo', 'GameController@playAdvanceDuolingo')->name('advanceDuolingo');
Route::get('/hardDuolingo', 'GameController@playHardDuolingo')->name('hardDuolingo');
Route::get('/expertDuolingo', 'GameController@playExpertDuolingo')->name('expertDuolingo');
Route::get('/extremeDuolingo', 'GameController@playExtremeDuolingo')->name('extremeDuolingo');

Route::get('/infiniteDuolingo', 'GameController@playInfiniteDuolingo')->name('infiniteDuolingo');

// Points
Route::post('/getPoints/{id}', 'UserController@update');

// Elements
Route::resource('/elements', 'ElementController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

// Leaderboards
Route::get('/show-tetris-lederboar', 'RecordTetrisController@index')->name('tetrisLeaderboard');
Route::get('/show-memorama-lederboar', 'RecordMemoramaController@index')->name('memoramaLeaderboard');

// Records
Route::post('/infiniteTetris/records', 'RecordTetrisController@updateRecords');
Route::post('/extremeMemorama/records', 'RecordMemoramaController@updateRecords');

// Dashboard tats
Route::get('/stats', 'DashboardController@index')->name('stats');

//Mis Curiosidades
Route::get('/misCuriosidades', 'CuriosidadesController@index')->name('misCuriosidades.index');