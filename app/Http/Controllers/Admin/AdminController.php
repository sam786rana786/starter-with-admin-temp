<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\AdmFrm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have Logged Out Successfully.');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile', compact('adminData'));
    }

    public function editProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile.edit', compact('adminData'));
    }

    public function storeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;


        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/admin_images'), $filename);
            $imageName = 'backend/uploads/admin_images/' . $filename;
            if (file_exists(public_path($data['profile_image']))) {
                unlink($data['profile_image']);
            }
            $data['profile_image'] = $imageName;
        }
        $data->save();
        return redirect()->route('admin.profile')->with('info', 'Admin Profile Updated Successfully');
    }

    public function changePassword()
    {
        return view('admin.profile.changePassword');
    }

    public function storePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);
            $users->save();
            return redirect()->back()->with('success', 'Password Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Old Password Did not match');
        }
    }
}
