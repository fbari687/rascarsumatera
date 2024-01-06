<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'image' => 'banner-image/9xbx2tZxij0p0KvsL60LT2UkmbDNHFD1usuvGksS.png'
        ]);
    }
}
