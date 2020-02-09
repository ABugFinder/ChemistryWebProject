<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //dd($user);

        if(Gate::denies('edit-users')){ //This gate asks if the user has the admin role to let him or not stay in the edit view
            return redirect(route('admin.users.index'));
        }

        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($request);
        //sync method allows you to pass an array of parametters. For this particular case, is usefull if our user has the two roles checked
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //dd($user);

        if(Gate::denies('delete-users')){ //This gate asks if the user has the admin role to let him or not stay in the edit view
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach(); //Removing all the roles related to the selected user
        $user->delete(); //Deleting the user

        return redirect()->route('admin.users.index');
    }
}
