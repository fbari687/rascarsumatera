<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'socmed_id' => 1,
            'content' => '+6281271114114',
            'link' => 'https://wa.me/+6281271114114'
        ]);

        Contact::create([
            'socmed_id' => 2,
            'content' => 'dedi@rascarsumatera.co.id',
            'link' => 'mailto:dedi@rascarsumatera.co.id'
        ]);

        Contact::create([
            'socmed_id' => 4,
            'content' => '@rascarsumatera',
            'link' => 'https://www.instagram.com/rascarsumatera/',
        ]);

        Contact::create([
            'socmed_id' => 5,
            'content' => 'Jl. Nusantara / Jl. Raya Lintas Timur
            Km 32 No. 41 RT. 02 Kel. Timbangan, Kec. Indralaya Utara, Kab. Ogan Ilir, Sumatera Selatan',
            'link' => 'https://maps.app.goo.gl/zKjdJJLwQpceQEiK8',
            'priority' => 99
        ]);
    }
}
