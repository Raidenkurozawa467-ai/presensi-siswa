# Aplikasi Presensi Siswa

Aplikasi presensi siswa berbasis web untuk SMK TI Airlangga Samarinda.

## Teknologi

- PHP Native
- MariaDB
- PDO
- OOP
- HTML, CSS, JavaScript

## Fitur

- Login dan Logout Administrator
- CRUD Kelas
- CRUD Siswa
- Simulasi Tap Kartu
- Rekap Presensi
- Pencarian Siswa
- Filter Presensi

## Status

Dalam tahap pengembangan.

## Database

Nama database: `presensi_siswa`

Database memiliki empat tabel:

1. `kelas`: menyimpan data kelas dan jurusan.
2. `siswa`: menyimpan NISN, nama, alamat, dan kelas.
3. `presensi`: menyimpan catatan tanggal dan waktu presensi.
4. `users`: menyimpan akun administrator.

Relasi:

- Kelas memiliki banyak siswa (1:N).
- Siswa memiliki banyak catatan presensi (1:N).

Database dibuat menggunakan DDL
yang tersimpan di `database/schema.sql`.

## Seeder Database

Seeder digunakan untuk memasukkan data awal
ke dalam database.

File: `database/seeder.sql`

Data awal yang dimasukkan:

- 3 data kelas.
- 3 data siswa contoh.

Data siswa terhubung dengan tabel kelas
menggunakan Foreign Key `id_kelas`.

Seeder digunakan untuk mempermudah pengujian
aplikasi selama proses pengembangan.

## Class Database

File: `config/Database.php`

Class Database bertugas menghubungkan aplikasi
PHP dengan database MariaDB menggunakan PDO.

Property:

- host: alamat server database.
- dbname: nama database.
- username: username database.
- password: password database.

Method:

- getConnection(): membuat dan mengembalikan
  koneksi PDO.

Class ini menggunakan try-catch untuk menangani
kesalahan koneksi database.

Konfigurasi PDO:

- ERRMODE_EXCEPTION untuk menangani error.
- FETCH_ASSOC untuk mengambil data berbentuk
  array asosiatif.
- utf8mb4 untuk mendukung karakter Unicode.

## Class BaseModel

File: `classes/BaseModel.php`

BaseModel merupakan abstract class yang digunakan
sebagai class induk untuk model lainnya.

Property:

- $db: menyimpan koneksi PDO.
- $table: menyimpan nama tabel database.

Method:

- \_\_construct(PDO $db): menerima koneksi database.
- getAll(): mengambil seluruh data dari tabel.

Konsep OOP:

- Abstract Class: class induk yang tidak bisa
  dibuat objek secara langsung.
- Inheritance: class lain dapat mewarisi BaseModel.
- Protected: property dapat diakses oleh class
  induk dan class turunannya.
- Constructor: dijalankan otomatis ketika objek dibuat.
- $this: mengakses property milik objek saat ini.

Class yang akan mewarisi BaseModel:

- Kelas
- Siswa
- Presensi

## Class Kelas

File: `classes/Kelas.php`

Class Kelas digunakan untuk mengelola
data pada tabel kelas.

Class ini mewarisi BaseModel menggunakan
keyword `extends`.

Property:

- $table: menentukan tabel yang digunakan.

Constructor:

- **construct(PDO $db): menerima koneksi PDO
  dan meneruskannya ke class induk menggunakan
  parent::**construct($db).

Method:

- getAll(): diwarisi dari BaseModel untuk
  mengambil seluruh data kelas.

## Class Siswa

File: `classes/Siswa.php`

Class Siswa digunakan untuk mengelola data
siswa pada tabel siswa.

Class ini mewarisi BaseModel menggunakan
keyword extends.

Property:

- $table: menentukan tabel siswa.

Constructor:

- \_\_construct(PDO $db): menerima koneksi PDO
  dan meneruskannya ke class induk.

Method:

- getAll(): mengambil seluruh data siswa.
- getAllWithKelas(): mengambil data siswa
  beserta nama kelas menggunakan INNER JOIN.

Relasi:

- siswa.id_kelas merupakan Foreign Key.
- kelas.id_kelas merupakan Primary Key.
