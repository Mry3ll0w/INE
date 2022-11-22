<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProductController;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
