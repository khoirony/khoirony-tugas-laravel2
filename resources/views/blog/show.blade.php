@extends('kerangka')

    @section("content")
    <br>
    @if(Session::get('logged') == true)
        <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
    @else
        <a href="{{ route('welcome') }}" class="btn btn-danger">Kembali</a>
    @endif

    <div class="shadow p-5 my-5">
        <div class="row">
            <div class="col-6">
                <img src="{{$produk->gambar_produk}}" alt="gambar produk" class="text-center w-100"> <br>
            </div>
            <div class="col-6">
                <p class="fw-bold fs-1">
                    {{$produk->nama_produk}} <span class="fs-6 ms-3">Rp {{$produk->harga_produk}},-</span>
                </p> 
                Deskripsi produk : {{$produk->deskripsi_produk}} <br>
                Stok produk : {{$produk->stok_produk}} <br>
            
                <br>
                @if(Session::get('logged') == true)
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                @endif
            </div>
        </div>
        @endsection
    </div>