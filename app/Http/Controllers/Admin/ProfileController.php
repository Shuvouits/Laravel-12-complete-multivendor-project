<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    use FileUploadTrait;

    public function index()
    {
        return view('admin.profile.index');
    }

    public function profileUpdate(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:admins,email,'.auth('admin')->user()->id],
            'avatar' => ['nullable', 'image', 'max:2048'],
        ]);

        $user = auth('admin')->user();
        if ($request->hasFile('avatar')) {
            $filepath = $this->uploadFile($request->file('avatar'), $user->avatar);
            $filepath ? $user->avatar = $filepath : null;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Profile updated successfully!',
        ]);
    }

    public function passwordUpdate(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required', 'string', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = auth('admin')->user();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Password updated successfully!',
        ]);
    }
}
