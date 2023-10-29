<form action="/laporan/{{ $item->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $item->tanggal) }}">
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" name="catatan" rows="2" placeholder="Catatan pengeluaran">{{ old('catatan', $item->catatan) }}</textarea>
        </div>
        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" name="saldo" id="saldo" class="form-control"  placeholder="Contoh : 100000" value="{{ old('saldo', $item->saldo) }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control"  placeholder="Contoh : 20000" value="{{ old('harga', $item->harga) }}">
        </div>
        <div class="form-group">
            <label for="sisa_saldo">Sisa Saldo</label>
            <input type="number" name="sisa_saldo" id="sisa_saldo" class="form-control"  placeholder="Contoh : 300000" value="{{ old('sisa_saldo', $item->sisa_saldo) }}">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
