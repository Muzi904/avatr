<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $userDetails = User::find(auth()->user()->id);

        return view('admin.pages.profile.edit', compact('userDetails'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            "first_name" => 'required',
            "last_name" => 'required',
            "display_name" => 'required',
            // "user_name" => 'required',
            "mobile" => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'password' => 'same:confirm_password',
            "job_title" => 'nullable',

            "office_phone" => "nullable",
            "second_email" => "nullable|email",
            "other_phone" => "nullable",
            "profile_photo" => 'nullable'
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        if ($request->hasFile('profile_photo')) {

            $image = $request->file('profile_photo');

            $path = Common::uploadImage($image, 'images/profile');

            if ($path != false) {
                $user->profile_photo  = $path;
            }
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->display_name = $request->display_name;
        // $user->username = $request->user_name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->jobtitle = $request->jobtitle;
        $user->office_phone = $request->office_phone;
        $user->email1 = $request->second_email;
        $user->mobile1 = $request->other_phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('admin.profile.edit')
            ->with('success', 'Profile updated successfully');
    }
}
