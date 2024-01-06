<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Berapa Lama Proses Pengerjaan Custom?',
            'answer' => 'Untuk pengerjaan custom membutuhkan ± 7-10 hari kerja'
        ]);
    }
}
