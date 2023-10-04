@extends('master.kerangka-admin')
@section('container')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Mahasiswa</h1>
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
                            
                             {{-- @if (session()->has('informasi')) --}}
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-circle-fill me-2"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                {{-- {{ session('informasi') }} --}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        {{-- @endif --}}

                            <div class="card-header d-flex">
                                {{-- <a href="#"> --}}
                                <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#create"><i
                                        class="bi bi-person-plus"></i> Tambah
                                    Data Mahasiswa</button>
                                {{-- </a> --}}
                            </div>

                            {{-- Modal Create --}}
                            <div class="modal fade" id="create">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @include('admin.daftarmahasiswa.create')
                                    </div>
                                </div>
                            </div>


                            <div class="card-body table-responsive p-0" style="height: 338px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Jabatan</th>
                                            <th>Motivasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datamahasiswa as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="" width="50" height="50" alt=""></td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->nim }}</td>
                                                <td><span class="text-danger">{{ $item->jabatan }}</span></td>
                                                <td> {{ $item->motivasi }}
                                                </td>
                                                <td>

                                                    <button class="btn bg-gradient-warning btn-sm" data-toggle="modal"
                                                        data-target="#modal-edit{{ $item->id }}"><i
                                                            class="bi bi-pencil-square"></i>
                                                        Edit</button>

                                                    <div class="modal fade" id="modal-edit{{ $item->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Data Mahasiswa</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                @include('admin.daftarmahasiswa.edit')
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form action="/daftarmahasiswa/{{ $item->id }}" class="d-inline"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn bg-gradient-danger btn-sm" onclick="return confirm('Apakah kamu yakin ? data akan dihapus secara permanen!')"><i
                                                                class="bi bi-trash3"></i>
                                                            Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('js')
    @error('nim')
        <script>
            $('#create').modal('show')
        </script>
    @enderror
@endsection
