# Apotek Telang With Framework Laravel

## Alat dan Bahan
 1. Composer
 2. PHP 7.3+
 3. MySQL / XAMPP
 4. Text Editor (Visual Studi Code)
 5. Terminal / GitBash

## Instalasi
1. Pastikan semua alat dan bahan yang dibutuhkan sudah terinstall semua
2. Jika belum terinstall, lakukan instalasi terlebih dahulu

## Cara menjalankan
1. Jalankan ```php artisan key:generate``` pada Terminal / GitBash yang terletak di lokasi folder ini
2. Jalankan XAMPP, lalu nyalakan Apache dan MySQL
3. Buka PHPMyAdmin, lalu buat databasenya
5. Import file ```apotek_telang.sql``` yang ada di folder ```DB``` ke database yang sudah dibuat
6. Setting database pada file ```.env```, sesuaikan dengan database yang sudah dibuat sebelumnya
7. Jalankan ```php artisan serve``` pada Terminal / GitBash
8. Buka http://localhost:8000
9. Masukkan username: admin - password: admin