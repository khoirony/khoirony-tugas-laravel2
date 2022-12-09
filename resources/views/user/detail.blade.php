@extends('kerangka')

    @section("content")
    <a href="{{ route('user.index') }}"><button>Kembali</button></a><br>

    <br><br>
    <h1>Detail</h1>
    Nama : {{$user->nama}} <br>
    Email : {{$user->email}} <br>
    Password : {{$user->password}} <br>
    Role : {{$user->role}} <br>
    Nama Sekolah : {{$user->sekolah->nama_sekolah}} <br>
    Alamat Sekolah : {{$user->sekolah->alamat_sekolah }} <br>
    Akreditasi Sekolah : {{$user->sekolah->akreditasi }}
    <br><br>
    <a href="{{ route('user.edit', $user->id) }}"><button>Edit Profile</button></a><br>
    @endsection