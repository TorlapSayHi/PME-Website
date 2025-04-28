<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');  // ถ้าเข้าสู่ระบบสำเร็จ ให้ไปยังหน้าที่ผู้ใช้ต้องการ
        } else {
            return redirect()->route('login')->withErrors(['error' => 'Username or Password is incorrect']);
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('home');
    }


}