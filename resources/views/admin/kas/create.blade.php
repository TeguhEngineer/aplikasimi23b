{{-- <form action="/daftarmahasiswa" method="POST"> --}}
{{-- @csrf --}}
<div class="modal-body">
    <div class="form-group">
        <label>Nama</label>
        <select class="form-control select2" name="nama" data-placeholder="Select a State" style="width: 100%;">
            <option>-- Pilih Nama Mahsiswa --</option>
            @foreach ($namamahasiswa as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}
                </option>
            @endforeach

        </select>
    </div>
    <div class="row">


        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <input type="checkbox" name="minggu1">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="MINGGU 1" disabled>
            </div>
        </div>
        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <input type="checkbox" name="minggu2">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="MINGGU 2" disabled>
            </div>
        </div>
        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <input type="checkbox" name="minggu3">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="MINGGU 3" disabled>
            </div>
        </div>
        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <input type="checkbox" name="minggu4">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="MINGGU 4" disabled>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
{{-- </form> --}}
