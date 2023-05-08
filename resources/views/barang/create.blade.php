<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
    </div>
    <div class="form-group">
        <label for="jenis_barang">Jenis Barang</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang">
    </div>
    <div class="form-group">
        <label for="stock_barang">Stock Barang</label>
        <input type="number" class="form-control" id="stock_barang" name="stock_barang">
    </div>
    <div class="form-group">
        <label for="harga_beli">Harga Beli</label>
        <input type="number" class="form-control" id="harga_beli" name="harga_beli">
    </div>
    <div class="form-group">
        <label for="harga_jual">Harga Jual</label>
        <input type="number" class="form-control" id="harga_jual" name="harga_jual">
    </div>
    <div class="form-group">
        <label for="gambar_barang">Gambar Barang</label>
        <input type="file" class="form-control" id="gambar_barang" name="gambar_barang">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
