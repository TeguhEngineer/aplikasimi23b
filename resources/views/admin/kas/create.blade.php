<form action="/pembayarankas" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label>Nama</label>
            <select class="form-control select2" name="users_id" style="width: 100%;" >
                <option>-- Pilih Nama Mahsiswa --</option>
                @foreach ($namamahasiswa as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}
                    </option>
                @endforeach

            </select>
        </div>
        <div class="row">

            <div class="col-12 my-2">
                <div class="form-group">
                    <label for="minggu1">Minggu 1</label>
                    <select class="custom-select rounded-0" name="minggu1" id="minggu1">
                        <option value="belum" selected>Belum</option>
                        <option value="sudah">Sudah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="minggu2">Minggu 2</label>
                    <select class="custom-select rounded-0" name="minggu2" id="minggu2">
                        <option value="belum" selected>Belum</option>
                        <option value="sudah">Sudah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="minggu3">Minggu 3</label>
                    <select class="custom-select rounded-0" name="minggu3" id="minggu3">
                        <option value="belum" selected>Belum</option>
                        <option value="sudah">Sudah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="minggu4">Minggu 4</label>
                    <select class="custom-select rounded-0" name="minggu4" id="minggu4">
                        <option value="belum" selected>Belum</option>
                        <option value="sudah">Sudah</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
