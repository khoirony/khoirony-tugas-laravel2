<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog   = blog::paginate(10);

        return view('blog.index', [
            'title' => 'List blog',
            'blog' => $blog,
        ]);
    }

    public function create()
    {
        $kategori   = kategori::all();
        return view("blog.create",[
            'title' => 'tambah blog',
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request)
    {   
        $file = $request->file("thumbnail");
        $filename = $file->hashName();
        $file->move("thumbnail", $filename);
        $path = "/thumbnail/" . $filename;

        $blog = new blog;
        $blog->judul = $request->input('judul');
        $blog->id_kategori = $request->input('id_kategori');
        $blog->konten = $request->input('konten');
        $blog->thumbnail = $path;
        $blog->save();

        return redirect()->back();
    }

    // Halaman Detail Salah Satu Data
    public function show($id)
    {
        $blog = blog::find($id);

        return view("blog.show", [
            'title' => $blog->judul,
            'blog' => $blog,
        ]);
    }

    // Halaman Mengedit Salah Satu Data
    public function edit($id)
    {
        $blog = blog::find($id);
        $kategori   = kategori::all();

        return view("blog.edit", [
            'title' => 'Edit blog',
            'blog' => $blog,
            'kategori' => $kategori
        ]);
    }

    // Fungsi Mengubah data PG
    public function update(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->judul = $request->input('judul');
        $blog->konten = $request->input('konten');
        $blog->id_kategori = $request->input('id_kategori');
        
        // ngecek input gambar
        if($request->file("thumbnail")){
            $file = $request->file("thumbnail");
            $filename = $file->hashName();
            $file->move("thumbnail", $filename);
            $path = "/thumbnail/" . $filename;

            // masukkan nama file ke kolom gambar blog
            $blog->thumbnail = $path;
        }
        $blog->update();
        return redirect()->back();
    }

    // Fungsi Menghapus data
    public function destroy($id)
    {
        $blog = blog::where('id', $id)->first();
        unlink(public_path($blog['thumbnail']));
        $blog = blog::where('id', $id)->delete();
        return redirect()->back();
    }
}
