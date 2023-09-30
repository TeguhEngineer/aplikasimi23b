{{-- <form action="/daftarmahasiswa" method="POST"> --}}
{{-- @csrf --}}
<div class="modal-body">
    <div class="form-group">
        <label>Nama</label>
        <select class="form-control select2" data-placeholder="Select a State" style="width: 100%;">
            <option>Teguh Afriansyah</option>
            <option>Adi Apriyanto</option>
            <option>Khikmal Kurniawan</option>
            
        </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <select class="form-control select2" data-placeholder="Select a State" style="width: 100%;">
            <option>Oktober 2023</option>
            <option>November 2023</option>
            <option>Desember 2023</option>
            <option>Januari 2024</option>
            <option>Februari 2024</option>
            <option>Maret 2024</option>
            <option>April 2024</option>
            <option>Mei 2024</option>
            <option>Juni 2024</option>
            <option>Juli 2024</option>
            <option>Agustus 2024</option>
            <option>September 2024</option>
            <option>Oktober 2024</option>
            <option>November 2024</option>
            <option>Desember 2024</option>
            
        </select>
    </div>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="number" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa"
            required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="custom-select rounded-0" name="jabatan" id="jabatan" required>
            <option disabled selected>--Pilih Jabatan--</option>
            <option value="wali_kelas">Wali kelas</option>
            <option value="ketua_kelas">Ketua Kelas</option>
            <option value="wakil_ketua">Wakil Ketua</option>
            <option value="sekertaris">Sekertaris</option>
            <option value="bendahara">Bendahara</option>
            <option value="s.keamanan">Seksi Keamanan</option>
            <option value="s.kerohanian">Seksi Kerohanian</option>
            <option value="s.kebersihan">Seksi Kebersihan</option>
        </select>
    </div>
    


</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
{{-- </form> --}}
