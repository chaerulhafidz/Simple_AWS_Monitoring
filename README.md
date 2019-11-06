<p align="center"><img src="https://images.techhive.com/images/article/2015/05/aws-logo-100584713-primary.idge.jpg" width="400"></p>


## Mengenai Website Monitoring AWS (Automated Weathering Station)

Website Monitoring AWS adalah halaman web untuk melihat kondisi-kondisi alam dan lingkungan yang berada pada iSurf Lab IPB.

## Instalasi

### Program Esensial
Untuk menjalankan projek ini, dibutuhkan program berikut:

- **[Composer](https://getcomposer.org/download/)**
- **[XAMPP](https://www.apachefriends.org/download.html)**
- **[Git for Windows](https://gitforwindows.org/)**
- **[Atom](https://atom.io/)** atau Text Editor yang lain

### Menjalankan Web

- Clone repository ini dan simpan pada sebuah folder.
- Buka folder tersebut dan dalam folder tersebut klik kanan dan pilih **Git Bash Here**.
- Dalam terminal GitBash, update composer untuk mengikuti bawaan projek ini:
```
composer update
```
- Aktifkan **XAMPP Control Panel** dan aktifkan **Apache** dan **MySQL**.
- Pada database (defaultnya [localhost/phpmyadmin](http://localhost/phpmyadmin)), buat database baru bernama `simple_aws`.
- Edit isi dari `.env.example` bagian `DB_` sesuai dengan database Anda dan simpan sebagai file baru bernama `.env`
- Kembali pada terminal GitBash, generasi key untuk laravel:
```
php artisan key:generate
```
- Migrasi database:
```
php artisan migrate
```
- Jalankan server local (default [localhost:8000](http://localhost:8000/):
```
php artisan serve
```

## API List

- Arah Angin (Hanya testing)
```
http://localhost:8000/api/arah_angin
```
- Suhu
```
http://localhost:8000/api/suhu
```
- Kelembaban
```
http://localhost:8000/api/kelembaban
```
- Tekanan Udara
```
http://localhost:8000/api/tekanan_udara
```
- Intensitas Cahaya
```
http://localhost:8000/api/intensitas_cahaya
```
- Kualitas Udara
```
http://localhost:8000/api/kualitas_udara
```
- Kondisi Cuaca
```
http://localhost:8000/api/kondisi_cuaca
```
- Ketinggian
```
http://localhost:8000/api/ketinggian
```

## Sekian

Terima Kasih
