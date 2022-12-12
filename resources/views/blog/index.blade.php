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
                    {!!substr($b->konten,0,200)!!}. . . Bersambung
                </td>
                <td>
                    {{$b->kategori->nama_kategori}}
                </td>
                <td class="text-center" width="12%">
                    <a href="{{route('blog.detail',$b->id)}}" class="btn btn-primary me-2"><i class="fas fa-eye"></i></a>
                    <a href="{{route('blog.destroy',$b->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection