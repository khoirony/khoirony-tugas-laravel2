@extends('kerangka')

    @section("content")
    <br>
        <div class="row">
            @foreach ($blog as $b)
            <div class="col-4 p-3">
                <div class="card">
                    <img src="{{$b->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$b->judul}} </h5>
                        <p class="card-text text-danger">{{ date_format($b->created_at,"l, d F Y")}}</p>
                        <a href="{{route('blog.detail',$b->id)}}" class="btn btn-primary me-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection