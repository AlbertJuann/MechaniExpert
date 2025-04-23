<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VideoCategory;  // Use the appropriate model for your video categories

class VideoCategorySeeder extends Seeder
{
    public function run()
    {
        // Array of video category data
        $categories = [
            [
                'id' => '1',
                'title' => 'Perawatan Dasar Motor',
                'thumbnail' => 'https://drive.google.com/file/d/1bdWSzGMQKYGiyw5rx61qITDB22h7lKWx/view?usp=drive_link',
                'slug' => 'perawatan-dasar-motor',
            ],
            [
                'id' => '2',
                'title' => 'Tutorial dan DIY (Do It Yourself)',
                'thumbnail' => 'https://drive.google.com/file/d/15K7T98SUSSAK7ZlMfn4TNL1GuX6kfLgu/view?usp=drive_link',
                'slug' => 'tutorial-dan-diy',
            ],
            [
                'id' => '3',
                'title' => 'Edukasi Sistem dan Teknologi Motor',
                'thumbnail' => 'https://drive.google.com/file/d/1GHu-FdetllDACkjcUCKgyWC2Xp_snhGw/view?usp=drive_link',
                'slug' => 'edukasi-sistem-dan-teknologi-motor',
            ],
            [
                'id' => '4',
                'title' => 'Tips Berkendara dan Keselamatan',
                'thumbnail' => 'https://drive.google.com/file/d/1dayz_v-ZxvsVpH2rkfUEOBGorkwGq-Ko/view?usp=drive_link',
                'slug' => 'tips-berkendara-dan-keselamatan',
            ],
        ];

        // Insert each category into the database
        foreach ($categories as $category) {
            VideoCategory::create($category);
        }
    }
}