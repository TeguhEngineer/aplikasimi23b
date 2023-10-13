<form action="/pembayarankas/{{ $item->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="users_id" class="form-control" value="{{ old('users_id', $item->user->nama) }}"
                disabled>
        </div>
        <div class="row">
            <div class="col-12 my-2">
                <div class="form-group">
                    @if ($item->minggu1 == 'sudah')
                        <label for="minggu1">Minggu 1 <i class="bi bi-check-circle text-success"></i></label> <br>
                    @elseif ($item->minggu1 == 'belum')
                        <label for="minggu1">Minggu 1</label> <br>
                    @endif

                    @if ($item->minggu1 == 'sudah')
                        <select class="custom-select rounded-0" style="border-color: rgb(0, 255, 0)" name="minggu1"
                            id="minggu1">
                        @elseif ($item->minggu1 == 'belum')
                            <select class="custom-select rounded-0"  name="minggu1"
                                id="minggu1">
                    @endif
                        <option value="belum"{{ old('minggu1', $item->minggu1) == 'belum' ? 'selected' : '' }}>Belum
                        </option>
                        <option value="sudah"{{ old('minggu1', $item->minggu1) == 'sudah' ? 'selected' : '' }}>Sudah
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    @if ($item->minggu2 == 'sudah')
                        <label for="minggu2">Minggu 2 <i class="bi bi-check-circle text-success"></i></label> <br>
                    @elseif ($item->minggu2 == 'belum')
                        <label for="minggu2">Minggu 2</label> <br>
                    @endif

                    @if ($item->minggu2 == 'sudah')
                        <select class="custom-select rounded-0" style="border-color: rgb(0, 255, 0)" name="minggu2"
                            id="minggu2">
                        @elseif ($item->minggu2 == 'belum')
                            <select class="custom-select rounded-0" name="minggu2"
                                id="minggu2">
                    @endif
                    <option value="belum"{{ old('minggu2', $item->minggu2) == 'belum' ? 'selected' : '' }}>Belum
                    </option>
                    <option value="sudah"{{ old('minggu2', $item->minggu2) == 'sudah' ? 'selected' : '' }}>Sudah
                    </option>
                    </select>
                </div>

                <div class="form-group">
                    @if ($item->minggu3 == 'sudah')
                        <label for="minggu3">Minggu 3 <i class="bi bi-check-circle text-success"></i></label> <br>
                    @elseif ($item->minggu3 == 'belum')
                        <label for="minggu1">Minggu 3 </label> <br>
                    @endif

                    @if ($item->minggu3 == 'sudah')
                        <select class="custom-select rounded-0" style="border-color: rgb(0, 255, 0)" name="minggu3"
                            id="minggu3">
                        @elseif ($item->minggu3 == 'belum')
                            <select class="custom-select rounded-0" name="minggu3"
                                id="minggu3">
                    @endif
                    <option value="belum"{{ old('minggu3', $item->minggu3) == 'belum' ? 'selected' : '' }}>Belum
                    </option>
                    <option value="sudah"{{ old('minggu3', $item->minggu3) == 'sudah' ? 'selected' : '' }}>Sudah
                    </option>
                    </select>
                </div>

                <div class="form-group">
                    @if ($item->minggu4 == 'sudah')
                        <label for="minggu4">Minggu 4 <i class="bi bi-check-circle text-success"></i></label> <br>
                    @elseif ($item->minggu4 == 'belum')
                        <label for="minggu4">Minggu 4 </label> <br>
                    @endif

                    @if ($item->minggu4 == 'sudah')
                        <select class="custom-select rounded-0" style="border-color: rgb(0, 255, 0)" name="minggu4"
                            id="minggu4">
                        @elseif ($item->minggu4 == 'belum')
                            <select class="custom-select rounded-0" name="minggu4"
                                id="minggu4">
                    @endif
                    <option value="belum"{{ old('minggu4', $item->minggu4) == 'belum' ? 'selected' : '' }}>Belum
                    </option>
                    <option value="sudah"{{ old('minggu4', $item->minggu4) == 'sudah' ? 'selected' : '' }}>Sudah
                    </option>
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
