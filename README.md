## Software Pendukung
1. Web Server
2. PHP 8.1
3. MySQL


## Cara Installasi

1.	Pindahkan direktori “aplikasi_pencatatan” ke dalam direktori DocumentRoot web server yang digunakan.
2.	Koneksikan aplikasi dengan database, dengan cara edit file “.env” pada direktori “aplikasi_pencatatan”.
3.	Buka terminal, arahkan ke direktori “aplikasi_pencatatan”.
4.	Selanjutnya jalankan command “php artisan migrate” untuk memulai migrasi database.
5.	Setelah semua telah dilakukan, selanjutnya jalankan command “php artisan serve”.
