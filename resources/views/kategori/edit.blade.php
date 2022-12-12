@extends('kerangka')

    @section("content")
    <a href="{{ route('sekolah.index') }}"><button>Kembali</button></a><br>

    <form action="{{ route('sekolah.update', $sekolah->id) }}" method="post">
        @csrf 

        <label for="nama_sekolah">Nama Sekolah : </label>
        <input type="text" name="nama_sekolah" id="nama_sekolah" value="{{$sekolah->nama_sekolah}}">

        <br>
        <label for="alamat_sekolah">Alamat Sekolah: </label>
        <input type="text" name="alamat_sekolah" id="alamat_sekolah" value="{{$sekolah->alamat_sekolah}}">
        <br>
        <label for="akreditasi">Akreditasi : </label>
        <input type="text" name="akreditasi" id="akreditasi" value="{{$sekolah->akreditasi}}">
        <br>
        <button type="submit">Edit</button>
    </form>
    @endsection