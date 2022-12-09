<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    // Halaman Awal Buat List
    public function index()
    {
        $sekolah   = Sekolah::paginate(10);

        return view("sekolah.index", [
            'title' => 'List Sekolah',
            'sekolah' => $sekolah,
        ]);
    }

    // Halaman Tambah Data
    public function create()
    {
        return view("sekolah.create",['title' => 'tambah sekolah']);
    }

    // Fungsi Menambah data ke PG
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'akreditasi' => 'required'
        ]);

        Sekolah::create($request->all());
        return redirect()->back();
    }

    // Halaman Detail Salah Satu Data
    public function show($id)
    {
        $sekolah = Sekolah::query()
            ->where("id", $id)
            ->first();

        return view("sekolah.show", [
            'title' => 'Detail Sekolah',
            'sekolah' => $sekolah,
        ]);
    }

    // Halaman Mengedit Salah Satu Data
    public function edit($id)
    {
        $sekolah = Sekolah::query()
            ->where("id", $id)
            ->first();

        return view("sekolah.edit", [
            'title' => 'Edit Sekolah',
            'sekolah' => $sekolah,
        ]);
    }

    // Fungsi Mengubah data PG
    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::find($id);
        $sekolah->nama_sekolah = $request->input('nama_sekolah');
        $sekolah->alamat_sekolah = $request->input('alamat_sekolah');
        $sekolah->akreditasi = $request->input('akreditasi');
        $sekolah->update();
        return redirect()->back();
    }

    // Fungsi Menghapus data
    public function destroy($id)
    {
        $sekolah = Sekolah::where('id', $id)->delete();
        return redirect()->back();
    }
}
