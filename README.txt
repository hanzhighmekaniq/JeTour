# JemberSpot

Website inovasi media digital untuk meningkatkan eksposur pariwisata di Jember.

## Prerequisite

anjaayyy

Untuk menjalankan aplikasi website ini, pastikan pada perangkat PC anda sudah terinstall alat-alat berikut ini:

1. Composer - Download dan instal Composer di https://getcomposer.org/
   - Pastikan Composer sudah terinstal dengan benar, cek dengan menggunakan perintah dibawah ini:
     composer --version

2. Node.js (termasuk npm) - Download dan instal Node.js di https://nodejs.org/
   - Pastikan Node.js dan npm sudah terinstal dengan benar, cek dengan menggunakan perintah dibawah ini:
     node --version
     npm --version

## Run Locally

Setelah menginstal Composer dan Node.js (dengan npm), ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal:
*jika menggunakan sourcecode yang dikirim langsung, bisa langsung skip ke poin 3
*running code dibawah ini di terminal

1. Clone repository:

   git clone https://github.com/Syntara-CITECH/Syntara.git

2. Masuk ke direktori proyek:

   cd Syntara

3. Instal dependensi PHP dengan Composer:

   composer install

4. Instal dependensi JavaScript dengan npm:

   npm install

5. Konfigurasi file environment:

   cp .env.example .env

6. Jalankan aplikasi:

   npm run dev

7. Akses aplikasi di browser:

   http://127.0.0.1:8000/


## Penjelasan Singkat Tentang Direktori Project Ini di Laravel
1. resources/views
   - Fungsi: Menyimpan semua file template HTML yang digunakan untuk menampilkan halaman web. Laravel menggunakan Blade, engine templating-nya, yang memungkinkan penggunaan sintaks PHP dalam file HTML.
   - File: index.blade.php.

2. resources/js
   - Fungsi: Menyimpan file JavaScript untuk aplikasi. Ini digunakan dengan Laravel Vite untuk mengompilasi dan mengelola aset JavaScript.
   - File: app.js.

3. resources/css
   - Fungsi: Menyimpan file CSS untuk styling menggunakan tailwind. Ini digunakan dengan Laravel Vite untuk mengompilasi dan mengelola aset tailwind CSS.
   - File: app.css.

4. resources/views/components
   - Fungsi: Menyimpan komponen Blade reusable. Komponen ini memungkinkan untuk mengorganisir dan mendefinisikan elemen UI yang digunakan dalam aplikasi. Dan juga pada direkroti ada komponen yang lain berdasarkan page masing masing.
   - File: footer.blade.php, head.blade.php, hero_pages.blade.php, navbar.blade.php.

5. resources/views/layouts
   - Fungsi: Menyimpan file layout yang mendefinisikan struktur umum dari tampilan. Ini membantu menghindari pengulangan kode dalam file tampilan lainnya.
   - File: master_landing.blade.php, master_pages.blade.php.

6. resources/views/pages
   - Fungsi: Menyimpan file tampilan untuk halaman spesifik dalam aplikasi. Ini memungkinkan pengorganisasian tampilan berdasarkan fungsinya, seperti halaman beranda, overview, dan halam yang lainnya.
   - File: destination.blade.php, food.blade.php, hotel_details.blade.php, landing.blade.php, overview.blade.php, ticketing.blade.php, transportation.blade.php.

7. public/assets
   - Fungsi: Menyimpan semua file aset seperti CSS, JavaScript, fonts, svg, dan gambar.
   - File: css/app.css, js/app.js, dll.

## Catatan

ada beberapa halaman yang bisa dibuka melalui interaksi tertentu seperti :
1. halaman /overview
   - dibuka dengan cara klik tombol bertuliskan "Selengkapnya" pada destinasi yang ada di halaman landing page
2. halaman /hotel-details
   - dibuka dengan cara klik tombol bertuliskan "Pesan Sekarang" yang ada di bagian "Hotel di dekat Wisata" di halaman location (/location)
3. halaman /destination
   - dibuka dengan cara klik tombol bertuliskan "Get Started" di Navigation Bar

halaman diatas bukan berarti tidak bisa diakses langsung dari url (misal mengetikkan http://127.0.0.1:8000/hotel-details di url itu masih bisa diakses).