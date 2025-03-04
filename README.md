<<<<<<< HEAD
# JeTour
Aplikasi Pariwisata Kabupaten Jember
=======
# JemberSpot

Website inovasi media digital untuk meningkatkan eksposur pariwisata di jember

## Prerequisite

Untuk menjalankan aplikasi website ini, pastikan pada perangkat PC anda sudah terinstall alat-alat berikut ini

-   **Composer** - [Download dan instal Composer](https://getcomposer.org/)

    -   Pastikan Composer sudah terinstal dengan benar, cek dengan menggunakan perintah dibawah ini
        ```bash
        composer --version
        ```

-   **Node.js** (termasuk npm) - [Download dan instal Node.js](https://nodejs.org/)
    -   Pastikan Node.js dan npm sudah terinstal dengan benar:
        ```bash
        node --version
        npm --version
        ```

## Run Locally

Setelah menginstal **Composer** dan **Node.js** (dengan npm), ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal:

Clone repository

```bash
  git clone https://github.com/Syntara-CITECH/Syntara.git
```

Masuk ke direktori proyek

```bash
  cd Syntara
```

Instal dependensi PHP dengan Composer

```bash
  composer install
```

Instal dependensi JavaScript dengan npm

```bash
  npm install
```

Konfigurasi file environment

```bash
  cp .env.example .env
```

Jalankan aplikasi

```bash
  npm run dev
```

Akses aplikasi di browser

```bash
  http://127.0.0.1:8000/
```
>>>>>>> 2e52c42 (First Commit)
