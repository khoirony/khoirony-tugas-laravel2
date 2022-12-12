@extends('kerangka')

    @section("content")
    <br>
    <a href="{{ route('blog.index') }}" class="btn btn-danger">Kembali</a>

    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data" class="shadow rounded p-5 mt-3 mb-5">
        @csrf 

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Pilih Kategori</label>
            <select class="form-select" id="id_kategori" name="id_kategori">
                @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Isi Konten</label>
            <textarea class="form-control" id="konten" name="konten" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" id="thumbnail" name="thumbnail">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Tulisan</button>
    </form>
    @endsection