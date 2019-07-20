# CASHIMA ONLINE DIGITAL PRINTING
 ** Spesifikasi untuk menginstal dan menggunakan website ini : **
- PHP 7 / 7.+
- composer
- Mysql 5.6 
- Laravel 5.4
- Browser : firefox atau chrome

## Langkah instalasi
1. Clone project ini : `git clone https://github.com/Playon-id/cashima.git atau download zip`
2. Masuk ke folder cashima : `cd cashima/` 
3. Install dependesi dan paket yang dibutuhkan : `composer install`
4. Buat key unik untuk project : `php artisan key:generate`
5. Atus hak akses folder agar bisa di baca tulis(linux/unix) : `sudo chwon -R www-data:www-data storage/ bootstrap/ migartion/` atau `sudo chmod -R 777  storage/ bootstrap/ migartion/`
6. Selanjutnya pastikan untuk membuat database baru dan menambahkan kredensial database Anda ke file .env Anda, Anda juga ingin menambahkan URL aplikasi Anda dalam variabel APP_URL:
``` APP_URL=http://localhost
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
 ```
7. Instal laravel voyager sesuai di[sini](https://docs.laravelvoyager.com/getting-started/installation)
8. Jalankan migrasi : `php artisan migrate` atau import dari file basis data ke database manager