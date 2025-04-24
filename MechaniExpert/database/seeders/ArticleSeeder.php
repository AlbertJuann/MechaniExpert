<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            [
                'title' => 'Tips Merawat Motor Secara Mandiri',
                'thumbnail' => 'https://drive.google.com/file/d/1eez0X0VGa2jyqljPOoAvEbMKy0xyDbdd/view?usp=drive_link',
                'slug' => 'tips-merawat-motor-secara-mandiri',
                'excerpt' => 'Perawatan Motor Rutin yang Mudah Dilakukan di Rumah. Merawat motor secara rutin penting untuk mencegah kerusakan parah...',
                'body' => 'Merawat motor penting dilakukan secara rutin. Ada beberapa langkah mudah dan bisa dilakukan secara rutin di rumah sambil sekaligus melakukan pengecekan...',
                'source' => 'https://www.wahanahonda.com/blog/tips-merawat-motor-secara-mandiri',
                'published_at' => Carbon::now(),
            ],
            [
                'title' => '7 Tips Merawat Motor agar Tetap Prima, Jangan Lupa Ganti Oli',
                'thumbnail' => 'https://drive.google.com/file/d/1-EzLHBLNR8KpL9bwWFf-Q-tnBei06ReE/view?usp=drive_link',
                'slug' => '7-tips-merawat-motor-agar-tetap-prima,-jangan-lupa-ganti-oli',
                'excerpt' => '7 Tips Merawat Sepeda Motor Agar Tetap Prima. Merawat sepeda motor penting untuk menjaga kinerjanya...',
                'body' => 'Denpasar - Sepeda motor merupakan salah satu alat transportasi yang sering digunakan di Indonesia. Setiap sepeda motor sebenarnya memiliki jenis dan fungsi yang berbeda...',
                'source' => 'https://www.detik.com/bali/berita/d-7349010/7-tips-merawat-motor-agar-tetap-prima-jangan-lupa-ganti-oli?utm_source=chatgpt.com',
                'published_at' => Carbon::now(),
            ],
            [
                'title' => 'Cara Merawat Mesin Motor Agar Tetap Halus: Rutin Ganti Oli!',
                'thumbnail' => 'https://drive.google.com/file/d/1wrcEPZ2YVwGIXHe_Jw1tjB2CubmxSsUa/view?usp=drive_link',
                'slug' => 'cara-merawat-mesin-motor-agar-tetap-halus:-rutin-ganti-oli',
                'excerpt' => 'Cara Merawat Mesin Motor Agar Tetap Halus: Rutin Ganti Oli! Merawat mesin motor secara teratur sangat penting untuk menjaga performa...',
                'body' => 'Cara Merawat Mesin Motor Agar Tetap Halus: Rutin Ganti Oli! Dalam penggunaannya, merawat mesin motor secara teratur merupakan sebuah keharusan untuk memastikan...',
                'source' => 'https://astraotoshop.com/article/cara-merawat-mesin-motor-agar-tetap-halus?utm_source=chatgpt.com',
                'published_at' => Carbon::now(),
            ],
            [
                'title' => 'Panduan Lengkap Perawatan Motor Matic Agar Awet',
                'thumbnail' => 'https://drive.google.com/file/d/17jmR4VVIZpclCKujeOgoSjcPNxz77H71/view?usp=drive_link',
                'slug' => 'panduan-lengkap-perawatan-motor-matic-agar-awet',
                'excerpt' => 'Panduan Lengkap untuk Merawat Motor Matic Agar Awet. Motor matic, terutama model seperti Honda Vario, memerlukan perawatan khusus...',
                'body' => 'Panduan Lengkap untuk Merawat Motor Matic Agar Awet. Di Indonesia, trend penggunaan motor matic, atau yang lebih dikenal sebagai skuter otomatis, telah menjadi sangat masif...',
                'source' => 'https://astraotoshop.com/article/panduan-perawatan-motor-matic?utm_source=chatgpt.com',
                'published_at' => Carbon::now(),
            ]
        ];

        DB::table('articles')->insert($articles);
    }
}
