<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VideoCategory;

class VideoCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'id' => '1',
                'title' => 'Perawatan Dasar Motor',
                'thumbnail' => '1bdWSzGMQKYGiyw5rx61qITDB22h7lKWx',
                'slug' => 'perawatan-dasar-motor',
            ],
            [
                'id' => '2',
                'title' => 'Tutorial dan DIY (Do It Yourself)',
                'thumbnail' => '15K7T98SUSSAK7ZlMfn4TNL1GuX6kfLgu',
                'slug' => 'tutorial-dan-diy',
            ],
            [
                'id' => '3',
                'title' => 'Edukasi Sistem dan Teknologi Motor',
                'thumbnail' => '1GHu-FdetllDACkjcUCKgyWC2Xp_snhGw',
                'slug' => 'edukasi-sistem-dan-teknologi-motor',
            ],
            [
                'id' => '4',
                'title' => 'Tips Berkendara dan Keselamatan',
                'thumbnail' => '1dayz_v-ZxvsVpH2rkfUEOBGorkwGq-Ko',
                'slug' => 'tips-berkendara-dan-keselamatan',
            ],
        ];

        foreach ($categories as $category) {
            VideoCategory::create($category);
        }
    }
}