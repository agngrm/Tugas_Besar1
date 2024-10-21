<!-- Form to update a product -->
<div>
    <div class="container">
        <h1>Edit Produk</h1>


<form action="{{ url('produk/edit/', $ubahproduk->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Method spoofing to simulate PUT request -->
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="{{ $ubahproduk->nama_produk }}" required placeholder="Masukkan nama produk">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="{{ $ubahproduk->deskripsi }}" placeholder="Masukkan deskripsi produk">
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control" value="{{ $ubahproduk->harga }}" required placeholder="Masukkan harga produk">
    </div>

    <div class="form-group">
        <label for="jumlah_produk">Jumlah Produk</label>
        <input type="number" name="jumlah_produk" class="form-control" value="{{ $ubahproduk->jumlah_produk }}" required placeholder="Masukkan jumlah produk">
    </div>

    <div class="form-group">
        <label for="image">Gambar</label>
        <input type="file" name="image" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
