<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kas MI23B</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
    body {
        /* height: 1000px; */
        background-image: url(img/kas-user/Background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        /* background-position-y: -2.5rem; */
        background-attachment: fixed;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        margin-top: 50px;
    }
</style>

<body>
    <button type="button" id="modal" style="display: none" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Button hiden
    </button>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-primary-subtle">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hai, {{ Auth()->user()->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>Jangan lupa bayar kas yah :)</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="" type="button"  data-bs-toggle="modal" data-bs-target="#informasi" ><small>info lainnya<i class="bi bi-chevron-double-right"></small></i></a>
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Informasi --}}
    <div class="modal fade" id="informasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-success-subtle">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi <i class="bi bi-info-circle"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 px-5 py-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ipsam.

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Teguh</td>
                                    </tr>
                                    <tr>
                                        <td>Teguh</td>
                                    </tr>
                                    <tr>
                                        <td>Teguh</td>
                                    </tr>
                                    <tr>
                                        <td>Teguh</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <section id="tabel" class="tabel">
        <div class="container" style="width: 80%">
            <h1 class="text-center text-white">Website Khusus Kelas MI23B</h1>
            <h4 class="text-center text-white mb-4">(informasi pembayaran uang kas)</h4>

            <div class="row">
                <div class="col-5">
                    <table class="table table-bordered table-hover border-primary opacity-75">
                        <thead class="table-success">
                            <tr class="border-primary text-center">
                                <th>Nama</th>
                            </tr>
                            <tr class="border-primary text-center">
                                <th>Mahasiswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datamahasiswa as $item)
                                <tr>
                                    <td class="text-primary">{{ $item->user->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-7">
                    <table class="table table-bordered table-hover border-primary opacity-75">
                        <thead class="table-success">
                            <tr class="border-primary">
                                <th colspan="4" class="text-center">Minggu</th>

                            </tr>
                            <tr class="border-primary">
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                                <th class="text-center">3</th>
                                <th class="text-center">4</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($datamahasiswa as $item)
                                <tr class="text-center">
                                    <td>
                                        @if ($item->minggu1 == 'sudah')
                                            <i class="bi bi-check-square text-success"></i>
                                        @elseif ($item->minggu1 == 'belum')
                                            <i class="bi bi-x-square text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->minggu2 == 'sudah')
                                            <i class="bi bi-check-square text-success"></i>
                                        @elseif ($item->minggu2 == 'belum')
                                            <i class="bi bi-x-square text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->minggu3 == 'sudah')
                                            <i class="bi bi-check-square text-success"></i>
                                        @elseif ($item->minggu3 == 'belum')
                                            <i class="bi bi-x-square text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->minggu4 == 'sudah')
                                            <i class="bi bi-check-square text-success"></i>
                                        @elseif ($item->minggu4 == 'belum')
                                            <i class="bi bi-x-square text-danger"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        // Fungsi ini akan dipanggil saat halaman dimuat
        window.onload = function() {
            // Mengambil referensi tombol
            var button = document.getElementById('modal');

            // Simulasikan klik pada tombol
            button.click();
            button.style.display = 'none';
        };
    </script>
</body>

</html>
