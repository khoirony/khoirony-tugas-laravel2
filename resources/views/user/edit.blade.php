@extends('kerangka')

    @section("content")
    <a href="{{ route('user.index') }}"><button>Kembali</button></a><br>

    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf 

        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="{{$user->nama}}">

        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="{{$user->email}}">
        <br>
        <label for="password">password : </label>
        <input type="password" name="password" id="password" value="{{$user->password}}">
        <br>
        <label for="role">Role: </label>
        <select name="role" id="role">
            <option value="1">Admin</option>
            <option value="2">User</option>
            <option value="3">Guest</option>
        </select>
        <br>
        <label for="role">Sekolah: </label>
        <select name="id_sekolah" id="id_sekolah">
            <option value="{{$user->id_sekolah}}">{{$user->sekolah->nama_sekolah}}</option>
            @foreach($sekolah as $s)
                <option value="{{$s->id}}">{{$s->nama_sekolah}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Edit</button>
    </form>
    @endsection