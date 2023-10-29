<form action="/laporanpost" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" name="catatan" rows="2" placeholder="Catatan pengeluaran"></textarea>
        </div>
        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" name="saldo" id="saldo" class="form-control"  placeholder="Contoh : 100000" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control"  placeholder="Contoh : 20000" required>
        </div>
        <div class="form-group">
            <label for="sisa_saldo">Sisa Saldo</label>
            <input type="number" name="sisa_saldo" id="sisa_saldo" class="form-control"  placeholder="Contoh : 300000" required>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
