<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        return view('dashboard.profile.index', compact('profile'));
    }

    public function update(Request $request, $id)
    {

        $extension = $request->file('profile')->getClientOriginalExtension();
        $profileName = time() . '.' . $extension;
        $path = $request->file('profile')->storeAs('profile', $profileName, 'public');
        $profile = Profile::find($id)->update([
            'profile' => $profileName,
            'fullname' => $request->fullname,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status' => $request->status,
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile Berhasil Di Update');
    }
}
