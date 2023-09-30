<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = User::where('role','user');

        return view('admin.daftarmahasiswa.index', [
            'datamahasiswa'         =>$mahasiswa->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $validateData = $request->validate([
            'nama'       => 'required|max:100',
            'nim'        => 'required|unique:users',
            'email'      => 'required|min:3|max:50|unique:users',
            'password'   => 'required|min:5|max:20',
            'jabatan'    => 'required',
            'motivasi'   => 'required|max:50',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/daftarmahasiswa')->with('informasi','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.daftarmahasiswa.index', [
            'datamahasiswami23b'     =>User::where('id',$id)->get()
        ]);
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
        $validateData = $request->validate([
            'nama'       => 'required|max:100',
            'nim'        => 'required|unique:users,nim,'. $id,
            'email'      => 'required|min:3|max:50|unique:users,email,'. $id,
            // 'password'   => 'required|min:5|max:20',
            'jabatan'    => 'required',
            'motivasi'   => 'required|max:50',
        ]);
        User::find($id)->update($validateData);
        return back()->with('informasi','Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}