<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function kas() {
        $data = Kas::join('users','kas.users_id', '=', 'users.id')->select('kas.*')->orderBy('users.nama', 'ASC');
        return view('kas-user.index', [
            'datamahasiswa'     => $data->get()
        ]);
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
            $role = auth()->user()->role;
            if ($role == "admin") {
                return redirect()->intended('/dashboard');
            } elseif ($role == "user") {
                return redirect()->intended('/mi23b');
            }
        } else
        // dd('gagal');
        return back();
    }
    

}
