## Mantis

_An beautifull, elegant and simple Veronique's status page — Let's monitoring them all._

![Veronique banner](./banner.png)

## Motivasi
Projek ini terbentuk atas dasar rasa ingin tahu kita -sebagai tim yang bertanggung jawab atas semua system yang berjalan- terhadap status masing-masing system yang ada; _apakah berjalan sebagaimana mestinya? atau sedang _down_? atau bagaimana?_

Dengan dibangunnya system ini, harapannya kita dapat melakukan kegiatan _monitoring_ semua system dengan akurat dan engga ribet.
 
Kalimat di atas adalah cerita singkat dari bagaimana system ***Morph*** ini lahir.

## Teknologi
- Laravel 10.x
- Tailwind
- Vite

## Persyaratan
Untuk menjalankan morph di mesin lokal (baca: _`localhost`_), beberapa _tool_ yang dibutuhkan, antara lain:

- Web server, seperti:
    -  `xampp` atau `wampp` (jika menggunakan sistem operasi _Windows_)
     - `lampp` (jika menggunakan sistem operasi distro _Linux_)
     - `mampp` (jika menggunakan _MacOs_) ataau mungkin kamu lebih nyaman menggunakan Nginx?
- `composer` untuk mengurus _dependencies_ yang kita gunakan, yang mana bisa diunduh [di sini](https://getcomposer.org)
- `php ^8.x` bahasa pemrograman inti dari projek ini (jika menggunakan web server seperti contoh di atas seharusnya sudah _built-in_)
- JavaScript _runtime_, seperti `Node Js` untuk menjalankan `vite` _module bundler_

## Menjalankan di server lokal
Jika persyaratan yang dijabarkan di atas dirasa sudah terpasang, maka bisa langsung menjalankan perojek ini dengan beberapa ritual, seperti:

1. Clone repository ini `git clone https://github.com/wearevero/morph.git`
2. _Copy_ file `env.example` ubah menjadi `.env` dengan perintah `cp .env.example .env`
3. Setup basis data (_by default_ menggunakan `MySql`)
4. Jalankan perintah `composer install` untuk mengisntall semua _dependency_ yang dibutuhkan oleh si Laravel
5. `npm install` untuk menginstall semua _dependency_ yang dibutuhkan untuk _asset_
6. Lakukan migrasi pada basis data `php artisan migrate`
7. Jika sudah, generate key dengan perintah `php artisan key:generate`
8. Terakhir, _launch_ projek dengan perintah `php artisan serve` dan buka peramban dengan _port_ `:8000`
9. Jalankan perintah `php artisan schedule:work` untuk menjalankan _laravel scheduler_
10. _Refresh browser 666x_

## Menjalankan di production
Untuk menjalankan di _production stage_, dibutuhkan beberapa perintah untuk melakukan optimasi, misal:
- `composer require --optimize-autoloader --no-dev` untuk "membuang" _dependency_ yang tidak dibutuhkan dalam _production_
- Jalankan optimasi dengan perintah `php artisan optimize` yang mana akan membuat `cache` untuk `route`, `views` dan `config`

## Kontribusi

Jika kamu ingin berkontribusi pada projek ini, bisa membuka diskusi yang ada [di sini](https://github.com/wearevero/morph/discussions)

## Pemelihara
- [Krido](https://github.com/yuxeun)

## Lisensi

Morph adalah _open-sourced software_ yang menggunakan [MIT license](./LICENSE).
