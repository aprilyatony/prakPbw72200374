<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

</p>

## TENTANG TUGAS AKHIR PRAKTIKUM PEMROGRAMAN WEB (Aprilya Claudia Tony 72200374)

Laravel merupakan framework yang dapat membantu web developer dalam memaksimalkan penggunaan PHP dalam proses pengembangan website, dalam program laravel yang saya buat adapun beberapa fitur yang saya pakai untuk pengembangan web tersebut.

## Fitur yang saya gunakan sebagai berikut :
- Create, Read, Update, Delete pada tabel user.
- Create, Read, Update, Delete pada tabel user mahasiswa.


dimana kegunaan fitur tersebut adalah untuk membuat, membaca, mengubah dan melakukan penghapusan pada data yang diinginkan oleh pengguna (pengguna bebas melakukan manipulasi data)

## Beberapa Langkah Yang Harus di Lakukan dalam pembuatan Project Laravel Adalah  :
- Membuat basis data dengan perintah CREATE DATABASE "Nama Database"
- Setelah basis data berhasil di buat selanjutnya melakukan konfigurasi koneksi pada .env
- Setelah itu buatlah Terminal baru pada aplikasi Visual Studio Code (Terminal – New Terminal)
- Langkah berikutnya adalah melakukan pengecekan koneksi
- Selanjutnya kita perlu membuat permintaan eksekusi pada routes 
- setelah itu kita harus membuat Migration dengan perintah (php artisan make:migration create_namaTable_table)
- Setelah membuat Migration, kita harus memasukkan beberapa atribut kedalam table tersebut, selanjutnya adalah melakukan proses generate dengan menggunakan perintah migratation agar data tersebut dapat dijalankan, Jika proses migrasi berhasil dilakukan, maka Laravel akan secara otomatis menciptakan sebuah tabel baru yang sesuai dengan atribut yang ditentukan
- Jika dalam proses migrasi ini terjadi kesalahan dalam melakukan konfigurasi, pemrogram dapat menghapus tabel pada basis data dengan menggunakan rollback migration 
- Seeding dapat digunakan dengan membuat file seeding terlebih dahulu dengan menggunakan perintah artisan command (php artisan make:seeder NamatableSeeder), 
Jika perintah tersebut dijalankan, sistem akan membuat file seeder secara otomatis pada direktori database/seeds. Pada file seeder terdapat metode run() yang digunakan untuk menyisipkan data berdasarkan pada atribut yang ada pada tabel.
- Adapun persiapan untuk menggunakan faker pada seeding adalah dengan menambahkan header faker terlebih dahulu  (use Faker\Factory as Faker;

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
