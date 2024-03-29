<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\RecordMemorama;
use App\RecordTetris;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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

    public function showMyProfile()
    {
        $user = Auth::user();

        $userStore = $user->store()->where('id_user', '=', $user->id)->get();

        return view('users.myProfile', [
            'user' => $user,
            'userStore' => $userStore,
        ]);

    }

    public function showUserProfile($id)
    {
        $user = User::find($id);

        return view('users.userProfile', [
            'user' => $user,
        ]);

    }

    public function showEditProfile(){
        $user = Auth::user();
        return view('users.editMyProfile',[
            'user' => $user,
        ]);
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
        $user = User::find($id);
        
        $user->points += $request->points;

        $user->save();
        
        return $user->points;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function updateUser()
    {
        $user = Auth::user();
        $data = request()->all();
        

        if($data['name']){
            $user->name = $data['name'];
            
        }
        if($data['last']){
            $user->surname = $data['last'];
        }
        if($data['bio']){
            $user->biografi = $data['bio'];
        }

        $user->save();

        return redirect()->route('editProfile');
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
