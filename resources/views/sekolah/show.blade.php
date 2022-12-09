@extends('kerangka')

    @section("content")
    <a href="{{ route('sekolah.index') }}"><button>Kembali</button></a><br>

    <br><br>
    <h1>Detail</h1>
    Nama Sekolah : {{$sekolah->nama_sekolah}} <br>
    Alamat Sekolah : {{$sekolah->alamat_sekolah}} <br>
    Akreditasi : {{$sekolah->akreditasi}} <br><br>

    <a href="{{ route('sekolah.edit', $sekolah->id) }}"><button>Edit</button></a>
    @endsection