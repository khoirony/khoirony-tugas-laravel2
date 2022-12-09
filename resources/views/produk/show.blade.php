@extends('kerangka')

    @section("content")
    <br>
    <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>

    <div class="shadow p-5 my-5">
        <img src="{{$produk->gambar_produk}}" alt="gambar produk" class="text-center"> <br>
        <p class="fw-bold fs-1">
            {{$produk->nama_produk}} <span class="fs-6 ms-3">Rp {{$produk->harga_produk}},-</span>
        </p> 
        Deskripsi produk : {{$produk->deskripsi_produk}} <br>
        Stok produk : {{$produk->stok_produk}} <br>
    
        <br>
        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
        @endsection
    </div>