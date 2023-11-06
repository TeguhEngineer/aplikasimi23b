<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
    <style>
        /* Reset Css */
        body,
        h1,
        p {
            margin: 0;
            padding: 0;
        }

        /* Set Halaman A4 */
        @page {
            size: A4;
            margin: 1cm;
        }

        /* Ukuran dan Orientasi Halaman */
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            width: 21cm;
            height: 29.7cm;
            max-height: 29.7cm;
            max-width: 21cm;
            border-style: solid;
        }

        /* Konten */
        .content {
            position: relative;
            width: 18cm;
            padding-top: 0cm;
            margin: 0 auto;
        }

        .header {
            text-align: center;
        }


        .title-kop1 {
            font-size: 21px;
            font-weight: normal;
            margin-top: 1cm;
        }

        .border {
            border: 1.5px solid #000;
            margin-top: 20px;
        }

        .nama-mahasiswa {
            font-size: 15px;
            margin-top: 0.5cm;
        }


        .isi {
            /* margin-left: 1.5cm;
            margin-right: 1.5cm; */
            /* border-style: solid; */
        }

        p {
            font-size: 15px;
        }

        table {
            border-collapse: collapse;
            /* Untuk menggabungkan batas sel tabel */
            width: 100%;
            /* Lebar tabel 100% dari kontainer */
        }

        th,
        td {
            border: 1px solid black;
            /* Batas sel dengan ketebalan 1px dan warna hitam */
            padding: 8px;
            /* Jarak antara isi sel dengan batas */
            text-align: center;
            /* Teks di tengah sel */
        }
    </style>
</head>

<body>
    <div class="content">

        <div class="header">
            <h1 class="title-kop1">
                LAPORAN <br> PEMASUKAN DAN PENGELUARAN <br> KAS KELAS MI23B </p>
            </h1>
            <p>Kampus Politeknik LP3I Tasikmalaya <br> Jl. Ir. H. Juanda No.106, Panglayungan, Kec. Cipedes
                Kota Tasikmalaya, Jawa Barat 46151</p>
        </div>

        <div class="border"></div>
        <br>
        <div class="isi">
            <h3>LAPORAN PEMASUKAN KAS</h3>
            <table>
                <tr>
                    <th style="width: 20px">No.</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Total</th>
                    <th>Catatan</th>
                </tr>
                @foreach ($pemasukan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->bulan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>Rp{{ number_format($item->total, 0, ',', '.') }}</td>
                    <td>{{ $item->catatan }}</td>
                </tr>
                @endforeach
               
            </table>

            <br>

            <h3>LAPORAN PENGELUARAN KAS</h3>
            <table>
                <tr>
                    <th style="width: 20px">No.</th>
                    <th>Tanggal</th>
                    <th>Saldo</th>
                    <th>Catatan</th>
                    <th>Harga</th>
                    <th>Sisa Saldo</th>
                </tr>
                @foreach ($pengeluaran as $item)
                    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>Rp{{ number_format($item->saldo, 0, ',', '.') }}</td>
                    <td>{{ $item->catatan }}</td>
                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format($item->sisa_saldo, 0, ',', '.') }}</td>
                </tr>
                @endforeach
               
            </table>
        </div>
    </div>
</body>

</html>
