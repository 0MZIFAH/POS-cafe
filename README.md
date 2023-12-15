# INSTALASI COMPOSER
1. Download dan install Composer terlebih dahulu: https://getcomposer.org/download/latest-stable/composer.phar
2. Untuk cek apakah Composer terinstal atau tidak, dengan jalankan command berikut di CMD:

composer --version

Kalau berhasil terinstal, akan muncul versi composer
2. Di CMD, pindah ke folder projek dengan command berikut:

cd {PATH FOLDER PROJEK}

3. Di CMD, di dalam folder projek, jalankan command berikut: 

composer update



# PEMBUATAN DATABASE
1. Buka XAMPP, aktifkan MySQL, dan buka PhpMyAdmin
2. Di PhpMyAdmin, buat database dengan nama "cafe_db"
3. Pilih "Import" dan import file "cafe_db.sql" yang ada di folder projek
4. Untuk cek apakah database ter-connected atau tidak, jalankan command berikut di CMD, di dalam folder projek:

php artisan migrate:status

Kalau berhasil, tidak akan ada error


# MENJALANKAN WEB
1. Di CMD, di dalam folder projek, 3. Di CMD, jalankan command berikut: 

php artisan serve

2. Buka URL yang ditampilan oleh command tadi (harusnya: http://127.0.0.1:8000)


# AKUN
- Admin
Username: pemudakoding
Password: 123123123

- Kasir
Username: rhisna
Password: 123123123
