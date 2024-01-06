<?php

namespace Database\Seeders;

use App\Models\ProjectVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectVideo::create([
            'video' => 'project-video/DADJUQogkfEFaP3AYYzPQupLhUtTlXNlpSXeh2Pe.mp4'
        ]);
    }
}
