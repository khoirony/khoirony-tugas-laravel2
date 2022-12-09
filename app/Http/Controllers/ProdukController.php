<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk   = Produk::paginate(10);

        return view('produk.index', [
            'title' => 'List Produk',
            'produk' => $produk,
        ]);
    }

    public function create()
    {
        return view("produk.create",['title' => 'tambah produk']);
    }

    public function store(Request $request)
    {   
        $file = $request->file("gambar_produk");
        $filename = $file->hashName();
        $file->move("gambar_produk", $filename);
        $path = "/gambar_produk/" . $filename;

        $produk = new Produk;
        $produk->nama_produk = $request->input('nama_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->stok_produk = $request->input('stok_produk');
        $produk->gambar_produk = $path;
        $produk->save();

        return redirect()->back();
    }

    // Halaman Detail Salah Satu Data
    public function show($id)
    {
        $produk = produk::query()
            ->where("id", $id)
            ->first();

        return view("produk.show", [
            'title' => 'Detail Produk',
            'produk' => $produk,
        ]);
    }

    // Halaman Mengedit Salah Satu Data
    public function edit($id)
    {
        $produk = Produk::query()
            ->where("id", $id)
            ->first();

        return view("produk.edit", [
            'title' => 'Edit Produk',
            'produk' => $produk,
        ]);
    }

    // Fungsi Mengubah data PG
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_produk = $request->input('nama_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->stok_produk = $request->input('stok_produk');
        
        // ngecek input gambar
        if($request->file("gambar_produk")){
            $file = $request->file("gambar_produk");
            $filename = $file->hashName();
            $file->move("gambar_produk", $filename);
            $path = "/gambar_produk/" . $filename;

            // masukkan nama file ke kolom gambar produk
            $produk->gambar_produk = $path;
        }
        $produk->update();
        return redirect()->back();
    }

    // Fungsi Menghapus data
    public function destroy($id)
    {
        $produk = Produk::where('id', $id)->first();
        unlink(public_path($produk['gambar_produk']));
        $produk = Produk::where('id', $id)->delete();
        return redirect()->back();
    }
}
