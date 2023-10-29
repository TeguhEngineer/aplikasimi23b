<form action="/informasi" method="POST">
    {{-- @method('PUT') --}}
    {{-- @csrf --}}
    <div class="modal-body">
        <div class="form-group">
            <label>Informasi</label>
            <textarea class="form-control" name="informasi" rows="4" placeholder="Catatan untuk yang belum bayar kas"></textarea>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
