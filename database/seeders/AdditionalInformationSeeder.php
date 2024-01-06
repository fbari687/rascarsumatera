<?php

namespace Database\Seeders;

use App\Models\AdditionalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdditionalInformation::create([
            'key' => 'Berat',
            'value' => '15 Kg',
            'product_id' => 1
        ]);

        AdditionalInformation::create([
            'key' => 'Bahan Dasar',
            'value' => 'Plat Besi 2mm full',
            'product_id' => 1
        ]);

        AdditionalInformation::create([
            'key' => 'Bracket',
            'value' => '5mm',
            'product_id' => 1
        ]);

        AdditionalInformation::create([
            'key' => 'Cat',
            'value' => 'Powder Coating',
            'product_id' => 1
        ]);
    }
}
