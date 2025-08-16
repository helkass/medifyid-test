<form method="POST">
    @csrf
    @if ($method == 'edit')
        <div class="form-group">
            <label>Kode Kategori</label>
            <input type="text" class="form-control" name="kode_barang" required readonly value="{{ $item->kode ?? '' }}">
        </div>
    @endif

    @error('errors')
        <div class="text-danger text-center py-2">
            Terjadi kesalaan
        </div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required value="{{ $item->nama ?? '' }}">
    </div>

    <button class="btn btn-primary mt-3">Submit</button>

</form>
