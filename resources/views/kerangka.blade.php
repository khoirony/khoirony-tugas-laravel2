<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Icon Font Awesome -->
    <script src="https://kit.fontawesome.com/c12c059ff2.js" crossorigin="anonymous"></script>

    <!-- CDN Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">Jualan</a><span class="me-3">|</span><a class="navbar-brand" href="{{ route('blog') }}">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="{{ route('welcome') }}" method="post" class="d-flex ms-auto">
                    @csrf
                    <div class="border d-flex rounded" style="width:300px">
                        <input class="form-control border-0 rounded-start" type="search" id="cari" name="cari" placeholder="Masukkan Judul" aria-label="Search">
                        <select class="form-select border-0 rounded-0" style="width:100px" name="pilihan">
                            <option value="produk">Produk</option>
                            <option value="blog">Blog</option>
                        </select>
                        <button class="btn btn-outline-success border-0" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @if(Session::get('logged') == true)
                        <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
                        @else
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        @yield("content")
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>