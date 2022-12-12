<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::query()->create([
            "nama_produk" => "Kaos Polos Kuning",
            "deskripsi_produk" => "Kaos Polos Kuning",
            "stok_produk" => 24,
            "harga_produk" => 30000,
            "gambar_produk" => "/gambar_produk/kaos2.jpg"
        ]);
    }
}
