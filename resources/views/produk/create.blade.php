@extends('kerangka')

    @section("content")
    <br>
    <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>

    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data" class="shadow rounded p-5 mt-3 mb-5">
        @csrf 

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk">
        </div>
        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="text" class="form-control" name="harga_produk" id="harga_produk">
        </div>
        <div class="mb-3">
            <label for="stok_produk" class="form-label">Stok Produk</label>
            <input type="text" class="form-control" name="stok_produk" id="stok_produk">
        </div>
        <div class="mb-3">
            <label for="gambar_produk" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="gambar_produk" name="gambar_produk">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
    @endsection