<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use File;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->first();
        return view('profile.index', compact('users'));
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('profile.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->nik = $request->nik;
         if($request->file('avatar')) {
             $file = $request->file('avatar');
             $avatarname = time().str_replace(" ", "", $file->getClientOriginalName());
             $file->move('public/images/avatar', $avatarname);

             File::delete(public_path($users->avatar));
             $users->avatar = '/images/avatar/'.$avatarname;
         }

        $users->save();
        return redirect()->route('profile');
    }
}
