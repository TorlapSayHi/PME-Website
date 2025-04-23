<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $req){
        // echo "<pre>";
        // print_r($req -> email);
        // print_r($req -> password);
        // echo "</pre>";
        $user = User::where('email', $req->email)->first();
        if($user && $req->password && Hash::check($req->password, $user->password)){
            session()->forget('error');
            session(['user'=> $user]);
            return redirect('/');
        } else {
            session(['error'=> 'Password or Username is incorrect']);
            return view('login', ['email'=>$req->email]);
            // return redirect('/login');
        }

        // return redirect('/home'); //แก้ตรงนี้นะ ถ้าใส่แล้วกลับไปไม่ถูกหน้า ลบ Home ออก


        
    }
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }



}