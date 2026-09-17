<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!auth::attempt($request->only('email','password'))) {
            return back()->with('failed', 'username atau password salah');
        }else {
            $request->session()->regenerate();
            return redirect()->route('dashboard.admin')->with('success', 'berhasil masuk ke halaman admin');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
