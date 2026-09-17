<?php

namespace App\Http\Controllers\Auth;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registrasiController extends Controller
{
        public function store(Request $request) {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Admin::create([
            'nama_lengkap' => $user->name,
            'user_id' => $user->id,
            'email' => $user->email,
        ]);

        return back()->with('success', 'data user berhasil di tambah');
    }
}
