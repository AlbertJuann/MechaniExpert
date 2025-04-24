<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $videos = [
            [
                'module_id' => 1,
                'title' => 'Cara Mengganti Oli Mesin Motor Matic',
                'media' => 'https://www.youtube.com/watch?v=oHc7eZbEZLI',
                'desc' => 'Cara mudah mengganti oli mesin motor matic - tutorial ganti oli motor matic, divideo kali ini saya menunjukan bagaimana cara mengganti oli mesin sepeda motor matic jenis vario 125.caranya sangat mudah bisa dicoba dirumah anda sendiri,hanya dengan beberapa alat saja.bila lebih jelasnya tonton vedio ini.',
                'slug' => 'cara-mengganti-oli-mesin-motor-matic',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=oHc7eZbEZLI',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 1,
                'title' => 'Cara Mengecek Tekanan Ban Motor',
                'media' => 'https://www.youtube.com/watch?v=vYjZjISMIA8',
                'desc' => 'Ban motor yang kekurangan angin tentunya akan mempengaruhi kenyamanan saat riding. Maka itu, Anda perlu mengetahui tekanan angin pada ban motor Anda, apakah sudah sesuai rekomendasi pabrik. Tekanan ban ideal pada motor skutik seperti Honda BeAT yakni 29 psi untuk ban depan dan 33 psi pada ban belakang. Nah, bagaimana cara mengetahui tekanan angin pada ban motor yang kita gunakan sehari-hari?. Reporter GridOto.com, Thio Pahlevi akan membagikan tips cara mengetahui tekanan ban menggunakan alat ukur tire pressure.',
                'slug' => 'cara-mengecek-tekanan-ban-motor',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=vYjZjISMIA8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 1,
                'title' => 'Cara Membersihkan Rantai Motor',
                'media' => 'https://www.youtube.com/watch?v=69Go3gciUjk',
                'desc' => 'Video ini memberikan tutorial tentang cara membersihkan kerak pada rantai motor, hanya dengan modal 2000rupiah rantai motor kinclong seperti baru lagi 😎😎😎 Tonton videonya sampai selesai agar bisa melihat hasilnya 👍👍👍 jangan lupa LIKE, KOMEN, SUBSCRIBE channel ini Dan Share ke sosial media kalian 👍',
                'slug' => 'cara-membersihkan-rantai-motor',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=69Go3gciUjk',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 2,
                'title' => 'Cara Melepas dan Memasang Busi Motor yang Tepat',
                'media' => 'https://www.youtube.com/watch?v=kt0PdW7drB8',
                'desc' => 'Cara Mengganti Busi Motor Yang Benar - Cara Melepas Dan Memasang Busi Motor Yang Tepat.Busi pada sepeda motor memang mempunyai peran yang sangat penting karena merupakan penghantar pengapian bahan bakar ke dalam mesin.Jika sampai komponen ini rusak ,terkena air hingga berkarat,aus dan lain sebagainya maka motor pun menjadi tidak menyala sehingga satu-satunya cara menggantinya dengan yang baru.Jika anda ingin membuka Busi motor sendiri ada beberapa tips yang harus diperhatikan pertama pastikan mesin dalam kondisi dingin serta kunci busi sesuai dan usahakan memakai busi yang panjang,setelah itu masukkan besi atau obeng keantara lubang kunci busi,lalu putar kearah berlawanan jarum jam.Untuk lebih jelasnya simaklah video saya kali ini.',
                'slug' => 'cara-melepas-dan-memasang-busi-motor-yang-tepat',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=kt0PdW7drB8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 2,
                'title' => 'Pasang Lampu LED di Motor Tua',
                'media' => 'https://www.youtube.com/watch?v=yJrUD7B0zb0',
                'desc' => 'Pasang Lampu LED di Motor Tua | How To | GridOto Tips Hallo teman-teman GridOto. Pada motor keluaran terbaru, hampir semua motor sudah dilengkapi lampu LED. Selain terlihat mewah saat menyala, lampu LED juga dipilih karena hemat daya dan punya pancaran cahaya yang terang. Nah apakah motor tua dengan lampu bohlam biasa bisa dipasang lampu LED tanpa ubahan? Temukan jawabannya di video ini, Sob!',
                'slug' => 'pasang-lampu-led-di-motor-tua',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=yJrUD7B0zb0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 3,
                'title' => 'Perbedaan Sistem Injeksi dengan Karburator',
                'media' => 'https://www.youtube.com/watch?v=MOHROO34PUY',
                'desc' => 'Perbedaan cara kerja Sistem Injeksi dengan Karburator dan keunggulan masing-masing.',
                'slug' => 'perbedaan-sistem-injeksi-dengan-karburator',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=MOHROO34PUY',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 3,
                'title' => 'Cara Kerja Sistem Pendingin pada Mesin dengan Animasi',
                'media' => 'https://www.youtube.com/watch?v=AB-ir35toaE',
                'desc' => 'Penjelasan mengenai sistem pendingin air dengan animasi.',
                'slug' => 'cara-kerja-sistem-pendingin-pada-mesin-dengan-animasi',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=AB-ir35toaE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 4,
                'title' => 'Tips Aman Berkendara Saat Musim Hujan',
                'media' => 'https://www.youtube.com/watch?v=DX72YQbAekU',
                'desc' => 'Tips Naik Motor Waktu Hujan Sudah mulai masuk musim hujan nih. Saatnya untuk makin berhati-hati dalam mengendarai motor...',
                'slug' => 'tips-aman-berkendara-saat-musim-hujan',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=DX72YQbAekU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 4,
                'title' => 'Tips Hemat BBM Saat Berkendara',
                'media' => 'https://www.youtube.com/watch?v=StGkE7O8Q2k',
                'desc' => 'Harga BBM naik tentunya membuat kita harus mutar otak bagaimana cara menjalani hidup irit. Nah, buat kamu yg punya mobilitas tinggi menggunakan sepeda motor, bisa dicoba nih cara agar motor kamu tetap irit.',
                'slug' => 'tips-hemat-bbm-saat-berkendara',
                'quiz' => "-",
                'source' => 'https://www.youtube.com/watch?v=StGkE7O8Q2k',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('videos')->insert($videos);
    }
}
