<form action="/daftarmahasiswa/{{ $item->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{ old('nama', $item->nama) }}" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('nim', $item->nim) }}"
                required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email" value="{{ old('email', $item->email) }}"
                required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="123456789" disabled>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label> <br>
            <select class="custom-select rounded-0" name="jabatan" id="jabatan" required>
                <option disabled selected>--Pilih Jabatan--</option>
                <option value="wali_kelas"{{ old('jabatan', $item->jabatan)=='wali_kelas'?'selected':'' }}>Wali kelas</option>
                <option value="ketua_kelas"{{ old('jabatan', $item->jabatan)=='ketua_kelas'?'selected':'' }}>Ketua Kelas</option>
                <option value="wakil_ketua"{{ old('jabatan', $item->jabatan)=='wakil_ketua'?'selected':'' }}>Wakil Ketua</option>
                <option value="sekertaris"{{ old('jabatan', $item->jabatan)=='sekertaris'?'selected':'' }}>Sekertaris</option>
                <option value="bendahara"{{ old('jabatan', $item->jabatan)=='bendahara'?'selected':'' }}>Bendahara</option>
                <option value="s.keamanan"{{ old('jabatan', $item->jabatan)=='s.keamanan'?'selected':'' }}>Seksi Keamanan</option>
                <option value="s.kerohanian"{{ old('jabatan', $item->jabatan)=='s.kerohanian'?'selected':'' }}>Seksi Kerohanian</option>
                <option value="s.kebersihan"{{ old('jabatan', $item->jabatan)=='s.kebersihan '?'selected':'' }}>Seksi Kebersihan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Motivasi</label>
            <textarea class="form-control" name="motivasi" rows="2" placeholder="Motivasi singkat">{{ old('motivasi', $item->motivasi) }}</textarea>
        </div>

    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
