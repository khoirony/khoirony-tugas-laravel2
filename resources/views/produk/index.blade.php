@extends('kerangka')

    @section("content")
    <br>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah produk</a>
    
    <br>

    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col" width="20%">Gambar</th>
                <th scope="col">Nama produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
            <tr>
                <td width="20%">
                    <img src="{{$p->gambar_produk}}" alt="gambar produk" class="img-thumbnail">
                </td>
                <td>
                    {{$p->nama_produk}}
                </td>
                <td>
                    {{$p->deskripsi_produk}}
                </td>
                <td>
                    {{$p->harga_produk}}
                </td>
                <td>
                    {{$p->stok_produk}}
                </td>
                <td width="17%">
                    <a href="{{route('produk.detail',$p->id)}}" class="btn btn-primary me-2">Detail</a>
                    <a href="{{route('produk.destroy',$p->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection