<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showLaporan = Laporan::all();
        $showPengeluaran = Pengeluaran::all();
        $sisa_saldo      = Pengeluaran::latest()->first()->sisa_saldo;
        return view('admin.laporan.index', [
            'laporan'       => $showLaporan,
            'pengeluaran'   => $showPengeluaran,
            'sisasaldo'     => $sisa_saldo
        ]);
    }

    public function print()
    {   
        $pemasukan = Laporan::all();
        $pengeluaran = Pengeluaran::all();
        return view('admin.laporan.print',[
            'pemasukan'     => $pemasukan,
            'pengeluaran'   => $pengeluaran
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
            'bulan'      => 'required',
            'tahun'       => 'required',
            'total'        => 'required',
            'catatan'        => 'nullable',
        ]);
        Laporan::create($validateData);
        return redirect('/laporan')->with('informasi','');
    }

    public function pengeluaran(Request $request){
        $validateData = $request->validate([
            'tanggal'      => 'required',
            'catatan'      => 'required',
            'saldo'        => 'required',
            'harga'        => 'required',
            'sisa_saldo'   => 'required',
        ]);
        Pengeluaran::create($validateData);
        return redirect('/laporan')->with('informasi','');
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
        // Untuk Edit Pengeluaran
        $validateData = $request->validate([
            'tanggal'      => 'required',
            'catatan'      => 'required',
            'saldo'        => 'required',
            'harga'        => 'required',
            'sisa_saldo'   => 'required',
        ]);
        Pengeluaran::find($id)->update($validateData);
        return back()->with('informasi','');
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
