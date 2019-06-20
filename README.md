<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Tutorial Install (saya asumsi web server sudah berjalan):
1. unzip project di dalam folder/git clone ke dalam htdocs atau www
2. buka projectnya, edit .env dengan teks editor sesuaikan konfigurasi untuk DB_USERNAME, DB_PASSWORD  
3. bikin database namanya detik di phpmyadmin atau software db lainnya
4. cmd ke <path>/detik, ketikan command dengan urutan sebagai berikut 
   a. composer install
   b. composer update
   c. php artisan key:generate
   d. php artisan migrate
   e. php artisan storage:link
   f. php artisan serve
5. buka browser, ketik localhost:8000, website sudah berjalan
6. Akses localhost:8000/login, buat akun admin terlebih dahulu
7. Jika akun sudah dibuat, kemudian login, akun yang login sudah bisa bikin posting
8. Buat posting baru, save.
9. Buka tab baru, kemudian ketik dan akses 'localhost:8000' di browser
10. Posting yang dibuat akan muncul di halaman ini.
11. Terima Kasih sudah mencoba :)

