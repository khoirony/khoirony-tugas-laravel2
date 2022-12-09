<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        return view('landing', [
            "title" => "Judulnya",
            "peserta" => [
                "nama1",
                "nama2",
                "nama3",
                "nama4"
            ],
            "tampilkanPeserta" => true
        ]
        );
    }

    public function home(){

        return view('homepage', [
            "title" => "Memecah Component"
        ]
        );
    }

    public function homeacak(){

        return view('homeacak', [
            "title" => "Acak Component"
        ]
        );
    }

    public function upload(Request $request) {
        if ($request->method() == "GET") return view('upload');

        $file = $request->file("gambar");
        $filename = $file->hashName();
        $file->move("gambar", $filename);
        $path = $request->getHost() . "/gambar/" . $filename;

        return redirect()->back();
    }
}
