<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GantiPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.auth.ganti-password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Hash::check($request->password, auth()->user()->password)) {
            return back()->with("password_error", "Password Lama Salah");
        }

        if ($request->new_password != $request->confirm_new_password) {
            return back()->with("password_nosame", "Password Baru dan Konfirmasi Password Baru Tidak Sama");
        }

        if (strlen($request->new_password) < 8) {
            return back()->with("password_nosame", "Password Minimal 8 Karakter");
        }

        if (!preg_match("#[0-9]+#", $request->new_password)) {
            return back()->with("password_nosame", "Password harus mengandung huruf besar, huruf kecil, angka dan simbol");
        }

        if (!preg_match("#[a-z]+#", $request->new_password)) {
            return back()->with("password_nosame", "Password harus mengandung huruf besar, huruf kecil, angka dan simbol");
        }

        if (!preg_match("#[A-Z]+#", $request->new_password)) {
            return back()->with("password_nosame", "Password harus mengandung huruf besar, huruf kecil, angka dan simbol");
        }

        if (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $request->new_password)) {
            return back()->with("password_nosame", "Password harus megandung huruf besar, huruf kecil, angka dan simbol");
        }

        User::whereId($id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/')->with('success', 'Password Berhasil Diubah!');
    }
}
