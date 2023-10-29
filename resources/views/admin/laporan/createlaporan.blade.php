<form action="/laporan" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <select name="bulan" id="bulan" class="form-control select2" id="bulan" required>
                <option selected disabled>-- Pilih Bulan --</option>
                <option value="JANUARI">JANUARI</option>
                <option value="FEBRUARI">FEBRUARI</option>
                <option value="MARET">MARET</option>
                <option value="APRIL">APRIL</option>
                <option value="MEI">MEI</option>
                <option value="JUNI">JUNI</option>
                <option value="JULI">JULI</option>
                <option value="AGUSTUS">AGUSTUS</option>
                <option value="SEPTEMBER">SEPTEMBER</option>
                <option value="OKTOBER">OKTOBER</option>
                <option value="NOVEMBER">NOVEMBER</option>
                <option value="DESEMBER">DESEMBER</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Masukan Tahun" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" id="total" class="form-control"  placeholder="Contoh : 100000" required>
        </div>
        <div class="form-group">
            <label>Catatan</label>
            <textarea class="form-control" name="catatan" rows="2" placeholder="Catatan untuk yang belum bayar kas">tuntas</textarea>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
