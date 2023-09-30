<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function kas() {
        return view('kas-user.index');
    }

    public function dashboard() {
        return view('admin.dashboard.index');
    }
    
    public function authenticate(Request $request): RedirectResponse
    {
        // dd('oke');
        $credentials = $request->validate([
            'nim' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd('berhasil');
            return redirect()->intended('/dashboard');
        }
        // dd('gagal');
        return back();
    }
    

}
