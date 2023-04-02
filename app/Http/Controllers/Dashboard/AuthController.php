<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('Dashboard.auth.login');
    }

    public function login(Request $req)
    {
        if ($req->get('email') && $req->get('password')) {
            $credentials = $req->only(['email', 'password']);
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }
            return redirect()->route('loginForm')->with(['errors' => ['boyle bir kullanici yok']]);
        } else {
            return redirect()->route('loginForm')->with(['errors' => ['boyle bir kullanici yok']]);
        }
    }
}
