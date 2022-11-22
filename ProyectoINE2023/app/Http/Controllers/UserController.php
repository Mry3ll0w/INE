<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function edit(){
        return view('user.edit');
    }

    public function update(Request $request){
        $user = Auth::user();
        if ($request->oldPass != "") {
            if (!Hash::check($request->oldPass, $user->password))
                return back()->withInput()->withErrors(['oldPass' =>
                    ['La contraseña original no coincide.']]);
            else if ($request->newPass == ""
                    || $request->newPass != $request->repeatedPass)
                return back()->withInput()->withErrors(['newPass' =>
                        ['La nueva contraseña está vacía o mal repetida.']]);
            else
                $user->password = Hash::make($request->newPass);
        }
        $user->name = $request->name;
        $user->save();
        return back()->with(['success' => ['Los datos han sido modificados.']]); 
    }

}
