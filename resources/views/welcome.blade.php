@extends('kerangka')

    @section("content")
    <br>
        <div class="row">
            @foreach ($produk as $p)
            <div class="col-4 p-3">
                <div class="card">
                    <img src="{{$p->gambar_produk}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->nama_produk}} </h5>
                        <p class="card-text text-danger">Rp. {{$p->harga_produk}},-</p>
                        <a href="{{route('produk.detail',$p->id)}}" class="btn btn-primary me-2">Detail Produk</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection