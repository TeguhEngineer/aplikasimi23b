<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kas = Kas::join('users','kas.users_id', '=', 'users.id')->select('kas.*')->orderBy('users.nama', 'ASC');
        $users = User::orderBy('nama','ASC')->orwhere('role','user');
        return view('admin.kas.index',[
            'kas'     =>$kas->get(),
            'namamahasiswa' =>$users->get()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
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
            'users_id'      => 'required',
            'minggu1'       => 'required',
            'minggu2'        => 'required',
            'minggu3'        => 'required',
            'minggu4'        => 'required',
        ]);
        Kas::create($validateData);
        return redirect('/pembayarankas')->with('informasi','');
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
        //
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
            'users_id'      => 'required'. $id,
            'minggu1'       => 'required',
            'minggu2'        => 'required',
            'minggu3'        => 'required',
            'minggu4'        => 'required',
        ]);
        Kas::find($id)->update($validateData);
        return redirect('/pembayarankas')->with('informasi','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kas::where('id',$id)->delete();
        return back()->with('delete',''); 
    }
}
