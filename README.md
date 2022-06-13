# <p align="center"> IS184412 - Rancang Bangun Perangkat Lunak [C] </p>
<p align="center"> Dosen Pengampu<br><i><strong>Radityo Prasetianto Wibowo, S.Kom., M.Kom.</strong></i> </p>

***

<h3 align="center">Proyek Sistem Akademik Kelompok 3</h3>


## Authors
| No | NRP | Nama |
| :---: | :---: | --- |
| 1 | 5026201019  | Muhammad Ali Fikri |
| 2 | 5026201140  | Muhammad Armando Nur Rizqy Ansar |
| 3 | 5026201067  | Rih Prajna N |
| 4 | 5026201027  | Rahma Fauzia |
| 5 | 5026201127  | Chang Hong Kwang |
| 6 | 5026201010  | Al Habsi Waliyul Khaq |
| 7 | 5026201057  | Girhan Nuriski Lusandi |
| 8 | 5026201049  | Mirza Badaruddin |
| 9 | 5026201064  | Resha Ramzy Arkansa |
| 10 | 5026201111  | M. Farhan Rahmandika |
| 11 | 5026201043  | Juan Septian |

## Documents

Dokumen Requirements & Design: [Gdocs](https://docs.google.com/document/d/e/2PACX-1vSPDHtFf2sJtUdeCWvu-1EHtQfbHaVR4uIBswGl6Q_ebxdfL8CenUNiDWb0S4TxWIdKjoWEbdFkUFgU/pub)<br>
Dokumen Test Plan: [Gdocs](https://docs.google.com/document/d/e/2PACX-1vSPDHtFf2sJtUdeCWvu-1EHtQfbHaVR4uIBswGl6Q_ebxdfL8CenUNiDWb0S4TxWIdKjoWEbdFkUFgU/pub)<br>
User Guide: [Gdocs](https://docs.google.com/document/d/e/2PACX-1vT0VqThGL-IdI3YetCXB83CZ7pqEJwHq9IPFuulkuw9uYnXcIzIX_vnYG_K-j54ZJ8R94tW0OOXqnQ7/pub)<br>

## General Information
- **PHP** `8.x` atau lebih
- **Laravel** `9.x` atau lebih
- **MySQL** atau platform database lainnya
> **Composer** untuk **Laravel**
- Dikembangkan menggunakan **XAMPP**

## Petunjuk Instalasi dan Penggunaan
### Repository
- Clone repository terbaru
```
git clone https://github.com/armando2326/SiakadRBPL.git
```
### Environment 
- Membuat environment `.env`
```
cp .env.example .env
```
- Instalasi dependencies
```
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader
```
- Generate `APP_KEY` application key baru
```
php artisan key:generate
```
- Hapus application cache

```
php artisan cache:clear
```
- Cache application configuration

```
php artisan config:cache
```

### Database
- Buat database `siakad_rbpl` lalu atur konfigurasi pada file .env untuk `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD`
- Migrate dan database seeder
```
php artisan migrate:fresh --seed
```

### Deployment
- Deploy pada server lokal
```
php artisan serve
```
> Secara default, server lokal beralamat `localhost:8000`

***
<p align="center"><i>Repository ini hanya untuk tujuan educational</i></p>
