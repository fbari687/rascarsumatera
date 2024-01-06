<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Bumper Depan Model ARB FORD RANGER',
            'seo' => 'Bumper Depan Model ARB FORD RANGER',
            'slug' => 'bumper-depan-model-arb-ford-ranger',
            'type_id' => 1,
            'brand_id' => 1,
            'description' => '<p>Bumper Depan Model ARB Ford Ranger dirancang dengan fokus pada kekuatan, kepraktisan, dan tampilan yang tangguh. Didesain untuk memenuhi kebutuhan pengemudi yang aktif dan petualang, bumper depan ini memberikan perlindungan tambahan untuk area depan kendaraan. Terbuat dari bahan yang kuat dan tahan lama, Plat dan pipa besi berkualitas tinggi, yang memastikan keandalannya dalam menghadapi tantangan jalan yang berat dan berbagai kondisi medan. Desainnya yang kokoh dan solid memberikan perlindungan yang optimal terhadap benturan dan goresan saat menjalani perjalanan off-road atau dalam kondisi lalu lintas perkotaan yang padat.</p>

            Keunggulan :
            <ul>
            <li>-Bahan Berkualitas Tinggi</li>
            <li>-Tahan terhadap cuaca</li>
            <li>-Kokoh dan Tahan Lama</li>
            </ul>',
            'additional_information' => true,
            'image' => 'product-image/bumperdepan.png'
        ]);
    }
}
