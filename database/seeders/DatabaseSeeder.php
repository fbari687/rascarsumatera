<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdditionalInformation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BannerSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            TypeSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            AdditionalInformationSeeder::class,
            ProductImageSeeder::class,
            GallerySeeder::class,
            FaqSeeder::class,
            SocmedSeeder::class,
            ContactSeeder::class,
            ArticleSeeder::class,
            ProjectVideoSeeder::class
        ]);
    }
}
