<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriController extends Controller
{
    // Halaman Awal Buat List
    public function index()
    {
        $kategori   = kategori::paginate(10);

        return view("kategori.index", [
            'title' => 'List Kategori',
            'kategori' => $kategori,
        ]);
    }

    // Halaman Tambah Data
    public function create()
    {
        return view("kategori.create",[
            'title' => 'Tambah kategori'
        ]);
    }

    // Fungsi Menambah data ke PG
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'alamat_kategori' => 'required',
            'akreditasi' => 'required'
        ]);

        kategori::create($request->all());
        return redirect()->back();
    }

    // Halaman Detail Salah Satu Data
    public function show($id)
    {
        $kategori = kategori::query()
            ->where("id", $id)
            ->first();

        return view("kategori.show", [
            'title' => 'Detail kategori',
            'kategori' => $kategori,
        ]);
    }

    // Halaman Mengedit Salah Satu Data
    public function edit($id)
    {
        $kategori = kategori::query()
            ->where("id", $id)
            ->first();

        return view("kategori.edit", [
            'title' => 'Edit kategori',
            'kategori' => $kategori,
        ]);
    }

    // Fungsi Mengubah data PG
    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id);
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->alamat_kategori = $request->input('alamat_kategori');
        $kategori->akreditasi = $request->input('akreditasi');
        $kategori->update();
        return redirect()->back();
    }

    // Fungsi Menghapus data
    public function destroy($id)
    {
        $kategori = kategori::where('id', $id)->delete();
        return redirect()->back();
    }
}
