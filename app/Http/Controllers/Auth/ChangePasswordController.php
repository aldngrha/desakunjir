<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function showChangePasswordGet()
    {
        return view("auth.passwords.change-password");
    }

    public function changePasswordPost(Request $request)
    {
        if (
            !Hash::check(
                $request->get("current-password"),
                Auth::user()->password
            )
        ) {
            // The passwords matches
            return redirect()
                ->back()
                ->with("error", "Kata sandi kamu salah.");
        }

        if (
            strcmp(
                $request->get("current-password"),
                $request->get("new-password")
            ) == 0
        ) {
            // Current password and new password same
            return redirect()
                ->back()
                ->with(
                    "error",
                    "Kata sandi baru tidak boleh sama dengan kata sandi sekarang."
                );
        }

        $validatedData = $request->validate([
            "current-password" => "required",
            "new-password" => "required|string|min:8|confirmed",
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get("new-password"));
        $user->save();

        return redirect()
            ->back()
            ->with("success", "Kata Sandi Berhasil Diubah!");
    }
}
