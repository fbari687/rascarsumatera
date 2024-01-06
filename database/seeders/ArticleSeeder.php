<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Indikator Bensin Nyala Bukan Berarti Kosong! Ini Yang Harus Dilakukan',
            'seo' => 'Indikator Bensin Nyala Bukan Berarti Kosong! Ini Yang Harus Dilakukan',
            'slug' => 'indikator-bensin-nyala-bukan-berarti-kosong-ini-yang-harus-dilakukan',
            'image' => 'article-image/bensin.jpeg',
            'body' => '<p>Yang namanya keabisan bensin memang bukan situasi yang menyenangkan, Sahabat. Apalagi kalo lagi perjalanan jauh, pom bensin masih jauh banget sementara indikator bensin sudah nyala, panas dingin, deh. Nah, orang-orang menganggap kalo indikator bensin nyala tandanya mobil Sahabat akan segera mogok, tapi nyatanya produsen mobil yang membuat indikator peringatan ini cuma mau memperingatkan Sahabat untuk mengisi bensin sesegera mungkin, tapi kira-kira bertahan berapa lama ya, Sahabat?</p>
            <h4>Arti Sesungguhnya Indikator Peringatan Bensin</h4>
            <p>Fungsi dari indikator ini cuma satu, yaitu untuk mengingatkan pengendara bahwa bensinnya tinggal dikit, bukannya abis ya, Sahabat. Ketika indikator nyala, masih ada bensin di dalam tangki Sahabat, jadi gak usah panik. Yang harus Sahabat lakukan adalah segera cari pom bensin secepatnya karena mobil Sahabat cuma akan bertahan beberapa KM doang, tergantung mobilnya, sih. Normalnya tiap mobil menyisakan 2 liter bensin setelah indikator peringatan bensin menyala.</p>
            <p>Pada kondisi mobil yang normal, indikator peringatan bensin akan selalu menyala ketika Sahabat nyalain mesin dan akan hilang beberapa saat setelah mesin dinyalakan. Nah, kalo gak nyala, kayaknya Sahabat harus menepi ke bengkel terdekat deh kalo punya waktu.</p>
            <h4>Bawa Kendaraan Pas Indikator Bensin Nyala Aman Gak, Sih?</h4>
            <p>Sebenernya tidak berpengaruh sih sama kinerja mobil Sahabat, seenggaknya untuk jangka waktu pendek, Sahabat. Nah, kalo kelamaan, bensin yang tersisa gak cukup untuk melumasi dan mendinginkan pompa bensin. Kalo cara pemakaian mobil Sahabat kaya gini terus-terusan kayanya umur pompa bensin Sahabat sudah gak lama deh, Sahabat. Usahakan bensin yang ada dalam tangki mobil Sahabat terisi seengganya seperempat bagian. </p>
            <p>Komponen yang "tersiksa" karena tangki bahan bakar kosong, adalah pompa bahan bakar. Apalagi, umumnya mobil injeksi menggunakan pompa bahan bakar terendam bahan bakar di dalam tangki. Jika pompa bensin tidak terendam karena tangki kosong, pompa bahan bakar akan overheat, sehingga lama kelamaan akan rusak.</p>
            <p>Risiko lain yang diterima pemilik kendaraan yang sering mengabaikan kapasitas bensin pada tangki merupakan penyebab rusaknya saringan bensin. Komponen tersebut tidak dapat dibilang sepele apabila sedang bermasalah, karena kondisi saringan rusak akan lolos proses penyaringan serta dapat merusak pompa injektor. Hal ini karena pompa mampat dan berkerak di ruang bakar.</p>
            <p>Bahaya kendaraan sering kehabisan bensin memang menjadi momok tersendiri di masyarakat. Jika terlalu sering menunda isi bahan bakar lalu tangki dibiarkan dalam kondisi tidak penuh, bisa berisiko karat. Karena terdapat celah tangki yang tidak dibiarkan terendam bahan bakar. Karat inilah yang apabila tangki diisi penuh bisa larut dengan bensin kemudian akan menyebabkan saringan cepat rusak. Jika sudah begitu, pompa injektorjuga dapat rusak.</p>
            <p>Untuk itu, usahakan untuk selalu mengisi bahan bakar sebelum jarum indikator di posisi E atau empty. Selalu mengisi tangki bahan bakar dan menjaga agar tetap penuh adalah pilihan terbaik untuk merawat mesin kendaraan.</p>',
            'excerpt' => 'Yang namanya keabisan bensin memang bukan situasi yang menyenangkan, Sahabat. Apalagi kalo lagi perjalanan jauh, pom bensin masih jauh banget sementara indikator bensin sudah nyala, panas dingin, deh. Nah, orang-orang menganggap kalo indikator bensin nyala tandanya mobil Sahabat akan segera mogok, tapi nyatanya produsen mobil yang membuat indikator peringatan ini cuma mau memperingatkan Sahabat untuk mengisi bensin sesegera mungkin, tapi kira-kira bertahan berapa lama ya, Sahabat?',
            'tanggal' => Carbon::today()->format('Y-m-d'),
            'user_id' => 1,
        ]);
    }
}
