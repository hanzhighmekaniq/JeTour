<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::insert([
            [
                'name' => 'Jember Mini Zoo',
                'description' => 'Tidak kalah dengan kebun binatang di kota-kota lain, Jember Mini Zoo memiliki 300 ekor satwa dengan 40 macam species. Dilengkapi dengan water boom dan berbagai wahana yang sangat Instagram-able, Jember Mini Zoo menjadi salah satu tempat liburan favorit kalian saat musim liburan tiba.',
                'location' => 'Kelurahan Mangli, Kecamatan Kaliwates',
                'fasility' => 'Meeting, Gathering, Pesta Ulang Tahun, Weedings, Wisuda',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'minizoo.jpg',
                'price' => '90000',
                'content' => 'ga ada',
                'category_id' => 2,
            ],
            [
                'name' => 'Seger Nusantara',
                'description' => 'Pilihan tepat untuk Anda yang ingin berliburan di alam terbuka. Seger Nusantara menawarkan pemandangan padang rumput perbukitan yang sangat nyaman digunakan untuk aktivitas luar ruang, seperti camping atau piknik. Jika Anda tidak mau tidur di dalam tenda, tempat ini juga dilengkapi kamar penginapan yang disewakan dengan harga terjangkau. Lokasi tak begitu jauh dari kota dan mudah dilalui karena sudah sepenuhnya beraspal.',
                'location' => 'Desa Jatian, Kecamatan Pakusari',
                'fasility' => 'Camping, Penginapan, Piknik',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'seger_nusantara.jpg',
                'price' => '25000',
                'content' => 'ga ada',
                'category_id' => 2,
            ],
            [
                'name' => 'Wisata Puncak Rembangan',
                'description' => 'Menikmati dinginnya hawa kaki gunung sembari menyeduh teh jahe yang khas atau susu sapi asli berbagai rasa. Wisata Rembangan jadi pilihan tepat berakhir pekan untuk mendapat pengalaman romantis atau seru-seruan bersama keluarga. Termasuk bagian dari heritage tourism karena sudah ada sejak tahun 1937, rasanya tak ke Jember kalau belum ke Puncak  Rembangan. Bahkan presiden pertama Indonesia Ir. Soekarno pernah singgah kesini.',
                'location' => 'Desa Kemuning Lor, Kecamatan Arjasa',
                'fasility' => 'Camping, Penginapan, Piknik',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'wisata_puncak_rembangan.jpg',
                'price' => '25000',
                'content' => 'ga ada',
                'category_id' => 2,
            ],
            [
                'name' => 'Pantai Papuma',
                'description' => 'Papuma adalah akronim dari Pasir Putih Malikan yang artinya diambil dari bahasa Jawa, yaitu molak-malik atau bergulung-gulung dalam Bahasa Indonesia. Hendak menyantap ikan bakar atau sekadar bersantai di pinggir pantai menikmati panoramanya, Anda hanya perlu membayar tiket masuk dengan harga terjangkau. Tak perlu khawatir karena pantai ini dilengkapi fasilitas tempat parkir, toilet, warung kuliner ikan, hingga tempat istirahat dan penginapan.',
                'location' => 'Desa Lojejer, Kecamatan Wuluhan',
                'fasility' => 'Camping, Penginapan, Piknik',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'pantai_papuma.jpg',
                'price' => '20000',
                'content' => 'ga ada',
                'category_id' => 1,
            ],
            [
                'name' => 'Pantai Pancer',
                'description' => 'Pantai Pancer merupakan pantai yang perlu menempuh perjalanan melalui lintas selatan. Kalau sudah melihat mercusuar putih artinya Anda sudah dekat ke Pantai Pancer. Cukup membayar tiket seharga lima ribu rupiah, Anda sudah bisa masuk ke Pantai Pancer yang segaris juga dengan Pantai Cemoro Sewu. Pantai ini terkenal dengan keindahan sunsetnya yang sangat memukau.',
                'location' => 'Desa Puger, Kecamatan Puger',
                'fasility' => 'Camping, Penginapan, Piknik',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'pantai_pancer.jpg',
                'price' => '5000',
                'content' => 'ga ada',
                'category_id' => 1,
            ],
            [
                'name' => 'Pantai Paseban',
                'description' => 'Pasir hitam sepanjang garis pantai membuat destinasi wisata laut ini punya nuansa khas yang sayang dilewatkan. Pantai Paseban cocok untuk Anda yang punya hobi surfing atau sekadar mengabiskan waktu sore menonton olahraga voli pantai oleh warga sekitar sembari menyantap kuliner dari warung terdekat.',
                'location' => 'Desa Paseban, Kecamatan Kencong',
                'fasility' => 'Surving, Voli Pantai, Kuliner',
                'latitude' => '-7.274444',
                'longitude' => '110.403611',
                'image' => 'pantai_paseban.jpg',
                'price' => '10000',
                'content' => 'ga ada',
                'category_id' => 1,
            ],
        ]);
    }
}
