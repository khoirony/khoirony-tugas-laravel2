<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::query()->create([
            "judul" => "Raffi Ahmad dan Istri Ridwan Kamil Masuk Bursa Cawalkot Bandung 2024",
            "id_kategori" => 1,
            "id_penulis" => 1,
            "konten" => "Jakarta - Lembaga survei Indonesian Politics Reasearch and Consuling (IPRC) merilis gambaran dukungan warga terkait Pemilihan Wali Kota (Pilwalkot) Bandung 2024. Hasilnya nama publik figur Raffi Ahmad yang masuk ke dalam bursa calon wali kota (cawalkot) versi survei IPRC. <br>
            Dilansir detikJabar, Senin (12/12/2022), IPRC membagi pertanyaan dengan simulasi terbuka mengenai pilihan publik terkait Pilwalkot Bandung 2024, dalam surveinya. Survei ini digelar dengan 800 responden di 30 kecamatan di Kota Bandung pada 20-28 November 2022, dengan metode multistage random sampling, dengan margin of error ± 3,5% pada tingkat kepercayaan 95%.
            <br><br>
            Baca juga:<br>
            Raffi Ahmad Masuk Bursa Cawalkot Bandung Versi IPRC<br>
            Berdasarkan hasil survei petahana wali kota Yana Mulyana berada pada posisi teratas diikuti dengan istri Gubernur Jawa Barat Ridwan Kamil, Atalia Pratatya. Selain itu pada posisi ke 3 diisi oleh Nurul Arifin, dilanjutkan dengan Raffi Ahmad posisi ke 4 dan M Farhan.
            <br><br>
            Tidak sampai disitu, nama Yana dan Atalia terus bertengger di posisi paling atas dari pilihan publik untuk Pilwalkot Bandung 2024. Hal ini terlihat pada pertanyaan simulasi tertutup dengan menyodorkan 12 nama, Yana Mulyana mendapat elektabilitas 30,8%, Atalia Praratya 29,8% dan M Farhan 5,8%.
            <br><br>
            Baca juga:<br>
            Golkar: Ridwan Kamil Gabung Kosgoro, Secara Tak Langsung Warga Partai
            Berikut rincian hasil survei dengan simulasi terbuka terkait cawalkot Bandung 2024:
            <br><br>
            
            1. Yana Mulyana 28,5%<br>
            2. Atalia Praratya 25,6%<br>
            3. Nurul Arifin 3,8%<br>
            4. Raffi Ahmad 3,8%<br>
            5. M Farhan 3,5%<br>
            6. Budi Dalton 2,6%<br>
            7. Edwin Senjaya 2,3%<br>
            8. Erwin 1,8%<br>
            9. Elpi Nazmuzzaman 1,1%<br>
            10. Achmad Nugraha 1%<br>
            11. Ledia Hanifa 1%<br>
            12. Siti Muntamah 1%<br>
            13. Rendiana Awangga 0,8%<br>
            14. Ridwan Kamil 0,5%<br>
            15. Buky Wikagoe 0,4%<br>
            16. Haru Suandharu 0,4%<br>
            17. Aan Andi Purnama 0,1%<br>
            18. Andri Rusmana 0,1%<br>
            19. Ema Sumarna 0,1%<br>
            20. Fiki Satari 0,1%<br>
            21. Rachel Maryam 0,1%<br>
            22. Tedy Rusmawan 0,1%<br>
            <br>
            Tidak tahu/tidak menjawab 21,4%",
            "thumbnail" => '/thumbnail/politik1.jpeg'
        ]);
    }
}
