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
