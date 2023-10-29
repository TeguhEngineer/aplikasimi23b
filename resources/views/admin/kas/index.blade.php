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

                            {{-- Alert Create dan Edit --}}
                            @if (session()->has('informasi'))
                                <script>
                                    // Fungsi ini akan dipanggil saat halaman dimuat
                                    window.onload = function() {
                                        // Mengambil referensi tombol
                                        var button = document.getElementById('alert');

                                        // Simulasikan klik pada tombol
                                        button.click();
                                        button.style.display = 'none';
                                    };
                                    // {{ session('informasi') }}
                                </script>
                                <button type="button" id="alert" style="display: none"
                                    class="swalDefaultSuccess"></button>
                            @endif

                            {{-- Alert Delete --}}
                            @if (session()->has('delete'))
                                <script>
                                    // Fungsi ini akan dipanggil saat halaman dimuat
                                    window.onload = function() {
                                        // Mengambil referensi tombol
                                        var button = document.getElementById('alert');

                                        // Simulasikan klik pada tombol
                                        button.click();
                                        button.style.display = 'none';
                                    };
                                    // {{ session('informasi') }}
                                </script>
                                <button type="button" id="alert" style="display: none"
                                    class="swalDefaultError"></button>
                            @endif

                            <div class="card-header">
                                <div class="row">
                                    <div class="col-4">

                                        <button class="btn btn-outline-primary btn-xs" data-toggle="modal"
                                            data-target="#modal-create"><i class="bi bi-plus-circle"></i>
                                            Tambah Data Pembayaran</button>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="d-inline h5"><i class="bi bi-calendar3"></i>
                                            <b><u><?php echo date('j/m/Y'); ?></u></b>
                                        </p>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-outline-success btn-xs" data-toggle="modal"
                                        data-target="#modal-laporan"><i
                                                class="bi bi-journal-plus"></i> Buat Laporan</button>
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
                                        @foreach ($kas as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->user->nama }}</td>
                                                <td class="text-center">
                                                    @if ($item->minggu1 == 'sudah')
                                                    <i class="bi bi-check-square text-success"></i>
                                                    @elseif ($item->minggu1 == 'belum')
                                                    <i class="bi bi-x-square text-danger"></i>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->minggu2 == 'sudah')
                                                    <i class="bi bi-check-square text-success"></i>
                                                    @elseif ($item->minggu2 == 'belum')
                                                    <i class="bi bi-x-square text-danger"></i>
                                                    @endif

                                                </td>
                                                <td class="text-center">
                                                    @if ($item->minggu3 == 'sudah')
                                                    <i class="bi bi-check-square text-success"></i>
                                                    @elseif ($item->minggu3 == 'belum')
                                                    <i class="bi bi-x-square text-danger"></i>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->minggu4 == 'sudah')
                                                    <i class="bi bi-check-square text-success"></i>
                                                    @elseif ($item->minggu4 == 'belum')
                                                    <i class="bi bi-x-square text-danger"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn bg-gradient-warning btn-sm" data-toggle="modal"
                                                        data-target="#modal-edit{{ $item->id }}"><i
                                                            class="bi bi-pencil-square"></i> Edit</button>

                                                    <div class="modal fade" id="modal-edit{{ $item->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Pembayaran Kas</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                @include('admin.kas.edit')
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form action="/pembayarankas/{{ $item->id }}" class="d-inline"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn bg-gradient-danger btn-sm"
                                                            onclick="return confirm('Apakah kamu yakin ? data akan dihapus secara permanen!')"><i
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

                        {{-- Modal Laporan --}}
                        <div class="modal fade" id="modal-laporan">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Buat Laporan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @include('admin.laporan.createlaporan')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
