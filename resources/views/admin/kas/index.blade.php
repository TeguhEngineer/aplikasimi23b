@extends('master.kerangka-admin')
@section('container')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Uang Kas</h1>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-4">
                                        
                                            <button class="btn btn-outline-primary btn-xs" data-toggle="modal"
                                            data-target="#modal-create"><i class="bi bi-plus-circle"></i>
                                                Tambah Data Pembayaran</button>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="d-inline h5"><i class="bi bi-calendar3"></i> <b><u>Oktober 2023</u></b></p>
                                        <a href="#">
                                            <small><i class="bi bi-pencil-square"></i></small>
                                        </a>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="">
                                            <button class="btn btn-outline-success btn-xs"><i class="bi bi-journal-plus"></i> Buat Laporan</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 342px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th class="text-center">Minggu 1</th>
                                            <th class="text-center">Minggu 2</th>
                                            <th class="text-center">Minggu 3</th>
                                            <th class="text-center">Minggu 4</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Adi Apriyanto</td>
                                            <td class="text-center"><i class="bi bi-check-square text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-square text-success"></td>
                                            <td class="text-center"><i class="bi bi-x-square text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-square text-danger"></i></td>
                                            <td><button class="btn bg-gradient-warning btn-sm"><i
                                                        class="bi bi-pencil-square"></i> Edit</button> <button
                                                    class="btn bg-gradient-danger btn-sm"><i class="bi bi-trash3"></i>
                                                    Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Modal Create --}}
                        <div class="modal fade" id="modal-create">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Data Pembayaran</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @include('admin.kas.create')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
