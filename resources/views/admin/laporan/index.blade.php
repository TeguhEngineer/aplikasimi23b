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
                                        <b>Laporan Pemasukan Kas</b>
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
                                        @foreach ($laporan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->bulan }}</td>
                                                <td>{{ $item->tahun }}</td>
                                                <td><span
                                                        class="badge bg-gradient-success">Rp{{ number_format($item->total, 0, ',', '.') }}</span>
                                                </td>
                                                <td>{{ $item->catatan }}</td>
                                            </tr>
                                        @endforeach
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
                                        <button class="btn btn-outline-primary btn-xs" data-toggle="modal"
                                            data-target="#modal-pengeluaran"><i class="bi bi-plus"></i> Tambah
                                            Pengeluaran</button>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Pengeluaran --}}
                            <div class="modal fade" id="modal-pengeluaran">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Catatan Pengeluaran</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @include('admin.laporan.pengeluaran')
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
                                            <th>Saldo</th>
                                            <th>Harga</th>
                                            <th>Sisa Saldo</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengeluaran as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->catatan }}</td>
                                            <td><span class="badge bg-gradient-info">Rp{{ number_format($item->saldo, 0, ',', '.') }}</span></td>
                                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                                            <td><span class="badge bg-gradient-success">Rp{{ number_format($item->sisa_saldo, 0, ',', '.') }}</span></td>
                                            <td><button class="btn bg-gradient-warning btn-xs"><i
                                                        class="bi bi-pencil-square"></i> Edit</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card m-0">
                            <div class="card-header text-center">
                                <tr>
                                    <td><b>Sisa Saldo</b></td>
                                    <td><b>:</b></td>
                                    <td><span class="badge text-danger">
                                            <h5>Rp200.000</h5>
                                        </span></td>
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
