<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AkunControllerr extends Controller
{
    public function index()
    {
        $akun = User::all();

        return view('dashboard.akun.index', compact('akun'));
    }

    public function edit_avatar(Request $request)
    {
        // $validate = $request->validate([
        //     'avatar' => 'required|image|file|max:5120|mimes:jpg,jpeg,png'
        // ]);

        $image = $request->file('avatar')->getClientOriginalExtension();
        $nameImage = time() . '.' . $image;
        $path = $request->file('avatar')->storeAs('avatars', $nameImage, 'public');

        $akun = User::find(1)->update([
            'avatar' => $nameImage,
        ]);

        return redirect()->route('akun.index')->with('success', 'Akun Berhasil Di Update');
    }

    public function edit_profile(Request $request, $id)
    {
        $akun = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('akun.index')->with('success', 'Akun Berhasil Di Update');
    }

    public function edit_password(Request $request, $id)
    {
        $akun = User::find($id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('akun.index')->with('success', 'Akun Berhasil Di Update');
    }
}
