@extends('kerangka')

    @section("content")
    <a href="{{ route('user.create') }}"><button>Tambah User</button></a>
    <a href="{{ route('sekolah.index') }}"><button>Kelola Sekolah</button></a>
    <br><br>

    <table border="2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Pasword</th>
                <th>Role</th>
                <th>Aktif</th>
                <th>Nama Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
            <tr>
                <td>
                    {{$u->nama}}
                </td>
                <td>
                    {{$u->email}}
                </td>
                <td>
                    {{$u->password}}
                </td>
                <td>
                    {{$u->role}}
                </td>
                <td>
                    {{$u->aktif}}
                </td>
                <td>
                    {{$u->sekolah->nama_sekolah}}
                </td>
                <td>
                    <a href="{{route('user.detail',$u->id)}}">Detail</a> | 
                    <a href="{{route('user.destroy',$u->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection