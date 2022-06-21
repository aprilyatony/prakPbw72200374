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
- Adapun persiapan untuk menggunakan faker pada seeding adalah dengan menambahkan header faker terlebih dahulu  (use Faker\Factory as Faker;)

## Dalam Project prakPbw72200374 ini mempermudah pengguna dalam mengakses/mencari data yang dinginkan, kemudian jika terdapat alert dalam program, dan juga mempunyai fitur login bagi pengguna dimana ketika pengguna melakukan login pada program maka data yang dimasukan akan tersimpan dan tidak sembarang orang bisa mengaksesnya karena terdapat metode middleware untuk membatasi akses pengguna, metode tersebut berfungsi untuk membatasi akses (tidak bisa mengakses data mahasiswa dan user) kepada pengguna/orang yang tidak mempunyai akun login.
