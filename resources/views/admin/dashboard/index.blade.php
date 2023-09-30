@extends('master.kerangka-admin')
@section('container')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-warning"><i class="bi bi-people-fill"></i></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Mahasiswa</span>
                                <span class="info-box-number">22 Mahasiswa</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-warning"><i class="bi bi-wallet2"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Saldo Kas</span>
                                <span class="info-box-number">Rp200.000</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-warning"><i class="bi bi-journal-arrow-down"></i></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Laporan Pemasukan</span>
                                <span class="info-box-number">10</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-warning"><i class="bi bi-journal-arrow-up"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Laporan Pengeluaran</span>
                                <span class="info-box-number">15</span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
