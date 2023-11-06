@extends('master.kerangka-admin')
@section('container')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    {{-- <div class="col-sm-6">
                    <h1 class="m-0">Informasi</h1>
                </div> --}}
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Informasi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Informasi --}}
        <div class="modal fade" id="modal-informasi">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Buat Informasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @include('admin.informasi.create')
                </div>
            </div>
        </div>

        {{-- Modal Edit Informasi --}}
        <div class="modal fade" id="modal-edit-informasi">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ubah Informasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @include('admin.informasi.edit')
                </div>
            </div>
        </div>

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
            <button type="button" id="alert" style="display: none" class="swalDefaultSuccess"></button>
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
            <button type="button" id="alert" style="display: none" class="swalDefaultError"></button>
        @endif


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header h4 text-center">
                                <b>Informasi</b>
                            </div>
                            <div class="card-body">
                                @if ($tampilkan->count() < 1)
                                    <h5 style="text-align: center; color:rgb(241, 44, 44);">Tidak ada informasi!</h5>
                                @else
                                    @foreach ($tampilkan as $item)
                                        <textarea rows="8" cols="130" style="border: none; resize:none; overflow:hidden" disabled>{{ $item->informasi }}</textarea>
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-footer text-center">
                                @if ($tampilkan->count() < 1)
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal-informasi">Buat
                                        Informasi</button>
                                @else
                                    <button class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#modal-edit-informasi">Ubah Informasi</button>

                                    {{-- <form action="/informasi/{{ $tampilkan[0]->id }}" class="d-inline" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Hapus Informasi</button>
                                    </form> --}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
