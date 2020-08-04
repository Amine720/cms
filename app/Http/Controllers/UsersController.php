<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index')->with('users', User::all());
    }

    public function edit(){
        return view('users.edit')->with('user', auth()->user());
    }

    public function update(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'about' => 'required'
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);
        session()->flash("success", "User updated successfully");
        return redirect(route('users.index'));
    }


    public function makeAdmin(User $user){
        $user->role = 'admin';
        $user->save();

        session()->flash("success", "User is now an admin");
        return redirect(route('users.index'));
    }

}
