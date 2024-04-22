# Gallery

## Tentang Website:

Website Ini Dibuat Agar User Bisa Mempublish Gambar Dan Membuat Album, Secara Tampilan Ini Berusaha Menghikuti Pixiv, Walaupun Masih Jauh, Secara Fungsi Masih Sama, Yakni Membuat Album Dan Gambar

## Fitur:
- Login
- Register
- Logout
- Multi Pengguna/User
- Upload/Add Foto
- Membuat Album
- Komentar
- Like Foto
- dll

## Tampilan Website

![Screenshot (69)](https://github.com/HikkiHyaku/gallery/assets/105845193/3087feb6-ce4e-445b-9e91-39416da99455)

![Screenshot (70)](https://github.com/HikkiHyaku/gallery/assets/105845193/2365b781-0939-4dfe-a826-62574f95ffd9)

![Screenshot (71)](https://github.com/HikkiHyaku/gallery/assets/105845193/00cf0a0f-14c5-444c-a712-f81fd2710262)

![Screenshot (72)](https://github.com/HikkiHyaku/gallery/assets/105845193/277e8a66-ab4e-420c-9903-43033f7e9d23)

## ERD, Relasi dan UML Use Case

- ERD

![ikhsan](https://github.com/HikkiHyaku/gallery/assets/105845193/80bd89c6-37ef-40e3-9be4-4b6f6aea9286)

- Relasi

![Screenshot 2024-04-22 220558](https://github.com/HikkiHyaku/gallery/assets/105845193/fd7724b6-d2b3-4981-8917-4ac18938ce6d)

- UML

![UML Ikhsan drawio](https://github.com/HikkiHyaku/gallery/assets/105845193/770a616c-2c8d-4745-9a18-40939b39d53d)


## Prasyaratan

- PHP 8.3.6 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (PhpMyAdmin)
- Web Browser (Firefox, Opera, dll)
- Laragon

## Instalasi
1. Clone Repository
```
https://github.com/HikkiHyaku/gallery.git
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=ukk-gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. Jalankan Serve
```
php artisan serve
```

