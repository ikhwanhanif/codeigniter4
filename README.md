# CRUD Gambar

Ini adalah proyek CRUD sederhana menggunakan CodeIgniter 4 untuk mengelola gambar. Dalam proyek ini, Anda dapat menambahkan, mengedit, dan menghapus entri gambar beserta deskripsi.

## Fitur

- Menambahkan gambar baru beserta deskripsi.
- Mengedit gambar yang sudah ada.
- Menghapus gambar.
- Menampilkan daftar gambar beserta deskripsi.

## Instalasi

1. Clone repositori ini ke dalam folder htdocs (jika menggunakan XAMPP) atau folder web root server Anda.
   git clone https://github.com/ikhwanhanif/codeigniter4_CRUD-Gambar.git
2. Buat database MySQL baru dengan nama `gambar_db`.
3. Buat table dengan nama `images`:
   CREATE TABLE images (
      id INT AUTO_INCREMENT PRIMARY KEY,
      nama VARCHAR(255),
      deskripsi TEXT,
      file_gambar VARCHAR(255),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   );
5. Buka file `app/Config/Database.php` dan sesuaikan pengaturan koneksi database dengan konfigurasi Anda.
6. Buka file `C:\xampp\apache\conf\httpd.conf`, cari baris kode:
   DocumentRoot "C:\xampp\htdocs"
   <Directory "C:\xampp\htdocs">
   Ganti dengan:
   DocumentRoot "C:\xampp\htdocs\codeigniter4\public"
   <Directory "C:\xampp\htdocs\codeigniter4\public">
8. Akses proyek melalui web browser.
   `http://localhost`

## Kontribusi

Kontribusi Anda akan sangat dihargai. Silakan buat _pull request_ untuk saran atau perubahan yang Anda ingin lakukan.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat `LICENSE` untuk informasi lebih lanjut.

# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
