@extends('kerangka')

    @section("content")
    <a href="{{ route('sekolah.create') }}"><button>Tambah Sekolah</button></a>
    <a href="{{ route('user.index') }}"><button>Kelola User</button></a>
    
    <br>

    <br>
    <table border="2">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sekolah as $s)
            <tr>
                <td>
                    {{$s->nama_sekolah}}
                </td>
                <td>
                    {{$s->alamat_sekolah}}
                </td>
                <td>
                    {{$s->akreditasi}}
                </td>
                <td>
                    <a href="{{route('sekolah.detail',$s->id)}}">Detail</a> | 
                    <a href="{{route('sekolah.destroy',$s->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection