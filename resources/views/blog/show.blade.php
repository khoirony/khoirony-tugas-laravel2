@extends('kerangka')

    @section("content")
    <br>
    @if(Session::get('logged') == true)
        <a href="{{ route('blog.index') }}" class="btn btn-danger">Kembali</a>
    @else
        <a href="{{ route('welcome') }}" class="btn btn-danger">Kembali</a>
    @endif

    <div class="shadow p-5 my-5">
        <h1>{{$blog->judul}}</h1>
        <p>{{ date_format($blog->created_at,"H:i:s - l, d F Y")}}</p>
        <p>by : {{ $blog->penulis->nama }}</p><br>
        <img src="{{$blog->thumbnail}}" alt="gambar blog" class="text-center w-100"> <br>
        <br>
        <p><justify>{!!$blog->konten!!}</justify></p>
        @if(Session::get('logged') == true)
            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
        @endif
    </div>
    @endsection