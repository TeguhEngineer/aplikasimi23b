@extends('master.kerangka-admin')
@section('container')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporan Bulanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6">

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <b>Laporan Pemasukan</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button class="btn btn-outline-danger btn-xs px-3"><i class="bi bi-printer"></i>
                                            Print</button>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Total</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>SEPTEMBER</td>
                                            <td>2023</td>
                                            <td><span class="badge bg-gradient-success">Rp44.000</span></td>
                                            <td>Belum bayar (siapa)</td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>SEPTEMBER</td>
                                            <td>2023</td>
                                            <td><span class="badge bg-gradient-success">Rp44.000</span></td>
                                            <td>Belum bayar (siapa)</td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>SEPTEMBER</td>
                                            <td>2023</td>
                                            <td><span class="badge bg-gradient-success">Rp44.000</span></td>
                                            <td>Belum bayar (siapa)</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-6">

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <b>Laporan Pengeluaran</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button class="btn btn-outline-primary btn-xs"><i class="bi bi-plus"></i> Tambah Pengeluaran</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 264px;">
                                <table class="table table-hover table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Catatan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>05-10-2023</td>
                                            <td>beli apa</td>
                                            <td>Rp10.000</td>
                                            <td><button class="btn bg-gradient-warning btn-xs"><i
                                                        class="bi bi-pencil-square"></i> Edit</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card m-0">
                            <div class="card-header text-center">
                                <tr>
                                    <td><b>Sisa Saldo</b></td>
                                    <td><b>:</b></td>
                                    <td><span class="badge text-danger"><h5>Rp200.000</h5></span></td>
                                </tr>
                                {{-- <div class="row justify-content-center">

                                    <div class="col-4"><h5>Sisa Saldo :</h5></div>
                                    <div class="col-4"><span class="badge bg-success px-3"><h6>Rp200.000</h6></span></div>
                                </div> --}}
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
