<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class adminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }


// user
    public function user(){
        $user = Auth::user();
        $pengguna = Admin::all();
        return view('admin.user.user', compact('user','pengguna'));
    }

    public function editUser(Request $request, String $id) {
        $user = User::FindOrFail($id)->first();
        $admin = User::where('user_id', $id)->first();

        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
        ]);

        $user->update([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        $admin->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        return redirect()->route('user.admin')->with('success', 'data berhasil di edit');
    }

    public function destroy(String $id) {
        $user = User::FindOrFail($id)->first();
        $admin = Admin::where('user_id', $id);

        $user->delete();
        $admin->delete();


        return redirect()->route('user.admin')->with('success','data user berhasil di hapus');

    }
}
