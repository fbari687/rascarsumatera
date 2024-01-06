<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'image' => 'gallery-image/galeri-1.jpeg'
        ]);
        Gallery::create([
            'image' => 'gallery-image/galeri-2.jpeg'
        ]);
    }
}