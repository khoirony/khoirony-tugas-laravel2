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
        return view("blog.create",['title' => 'tambah blog']);
    }

    public function store(Request $request)
    {   
        $file = $request->file("gambar_blog");
        $filename = $file->hashName();
        $file->move("gambar_blog", $filename);
        $path = "/gambar_blog/" . $filename;

        $blog = new blog;
        $blog->nama_blog = $request->input('nama_blog');
        $blog->deskripsi_blog = $request->input('deskripsi_blog');
        $blog->harga_blog = $request->input('harga_blog');
        $blog->stok_blog = $request->input('stok_blog');
        $blog->gambar_blog = $path;
        $blog->save();

        return redirect()->back();
    }

    // Halaman Detail Salah Satu Data
    public function show($id)
    {
        $blog = blog::query()
            ->where("id", $id)
            ->first();

        return view("blog.show", [
            'title' => 'Detail blog',
            'blog' => $blog,
        ]);
    }

    // Halaman Mengedit Salah Satu Data
    public function edit($id)
    {
        $blog = blog::query()
            ->where("id", $id)
            ->first();

        return view("blog.edit", [
            'title' => 'Edit blog',
            'blog' => $blog,
        ]);
    }

    // Fungsi Mengubah data PG
    public function update(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->nama_blog = $request->input('nama_blog');
        $blog->deskripsi_blog = $request->input('deskripsi_blog');
        $blog->harga_blog = $request->input('harga_blog');
        $blog->stok_blog = $request->input('stok_blog');
        
        // ngecek input gambar
        if($request->file("gambar_blog")){
            $file = $request->file("gambar_blog");
            $filename = $file->hashName();
            $file->move("gambar_blog", $filename);
            $path = "/gambar_blog/" . $filename;

            // masukkan nama file ke kolom gambar blog
            $blog->gambar_blog = $path;
        }
        $blog->update();
        return redirect()->back();
    }

    // Fungsi Menghapus data
    public function destroy($id)
    {
        $blog = blog::where('id', $id)->first();
        unlink(public_path($blog['gambar_blog']));
        $blog = blog::where('id', $id)->delete();
        return redirect()->back();
    }
}
