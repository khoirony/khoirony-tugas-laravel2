@extends('kerangka')

    @section("content")
    <br>
    <a href="{{ route('blog.create') }}" class="btn btn-primary">Tambah Tulisan</a>
    
    <br>

    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col" width="20%">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Konten</th>
                <th scope="col">kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $b)
            <tr>
                <td width="20%">
                    <img src="{{$b->thumbnail}}" alt="gambar blog" class="img-thumbnail">
                </td>
                <td>
                    {{$b->judul}}
                </td>
                <td>
                    {{$b->konten}}
                </td>
                <td>
                    {{$b->id_kategori}}
                </td>
                <td width="17%">
                    <a href="{{route('blog.detail',$b->id)}}" class="btn btn-primary me-2">Detail</a>
                    <a href="{{route('blog.destroy',$b->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection