<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Kas;
use App\Models\Laporan;
use App\Models\Pengeluaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
        // dd('oke');
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            } else {
                return redirect('/mi23b');
            }
        }
        return view('login.index');
    }

    public function kas() {
        $data = Kas::join('users','kas.users_id', '=', 'users.id')->select('kas.*')->orderBy('users.nama', 'ASC');
        $informasi = Informasi::first();
        return view('kas-user.index', [
            'datamahasiswa'     => $data->get(),
            'informasi'         => $informasi
        ]);
    }

    public function dashboard() {
        $countMahasiswa = User::where('role','user')->count();
        $countPemasukan = Laporan::all()->count();
        $countPengeluaran = Pengeluaran::all()->count();
        $sisa_saldo      = Pengeluaran::latest()->first()->sisa_saldo;

        return view('admin.dashboard.index',[
            'countMahasiswa'    => $countMahasiswa,
            'countPemasukan'    => $countPemasukan,
            'countPengeluaran'  => $countPengeluaran,
            'sisaSaldo'         => $sisa_saldo,
        ]);
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
        return back()->with('loginError','Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
    

}
