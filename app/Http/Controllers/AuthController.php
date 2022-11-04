<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login() {
        return view('admin/login');
    }

    public function loginProcess(Request $request){
        $validasi = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);


        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];


        if (Auth::attempt($data)) {
            # code...
            $request->session()->regenerate();

            # code...
            return redirect()->route('dashboard');
        }
        else {
            return back()->with('error','Username atau Password anda salah!');
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
