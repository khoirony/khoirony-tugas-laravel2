<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sekolah;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'Khoirony Arief',
            'email' => 'khoirony@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1
        ]);

        Sekolah::create([
            'nama_sekolah' => 'SDN 007 CIPAGANTI KOTA BANDUNG',
            'alamat_sekolah' => 'Kecamatan coblong Kab Bandung Provinsi Jawa Timur',
            'akreditasi' => 'A'
        ]);
        Sekolah::create([
            'nama_sekolah' => 'SDN 024 COBLONG KOTA BANDUNG',
            'alamat_sekolah' => 'Kecamatan coblong Kab Bandung Provinsi Jawa Timur',
            'akreditasi' => 'B'
        ]);
        Sekolah::create([
            'nama_sekolah' => 'SDN 031 PELESIRAN KOTA BANDUNG',
            'alamat_sekolah' => 'Kecamatan coblong Kab Bandung Provinsi Jawa Timur',
            'akreditasi' => 'C'
        ]);
    }
}
