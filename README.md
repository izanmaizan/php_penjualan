# php_penjualan

# Tujuan Project PHP
## *untuk menghitung penjumlahan pada penjualan
## menghitung diskon berdasarkan status (pelanggan atau bukan pelanggan).
## Keterangan :
## jika statusnya pelanggan akan mendapatkan diskon 10%.
## jika statusnya bukan pelanggan maka tidak mendapat diskon.
##
## untuk menghitung ongkos berdasarkan kota tujuan
## untuk jakarta 20000
## untuk bandung 10000
## untuk surabaya 30000


## Buat kode berikut untuk menjalankan sql
### -- Membuat database php_dbnilai
### CREATE DATABASE php_dbnilai;

### -- Menggunakan database php_dbnilai
### USE php_dbnilai;

### -- Membuat tabel mhs
### CREATE TABLE mhs (
###     nim VARCHAR(8),
###     nama VARCHAR(20),
###     nama_matkul VARCHAR(30),
###     nilai1 DOUBLE,
###     nilai2 DOUBLE,
###     nilai3 DOUBLE,
###     rata DOUBLE,
###     ket VARCHAR(20)
### );

### -- Memasukkan data pertama
### INSERT INTO mhs (nim, nama, nama_matkul, nilai1, nilai2, nilai3, rata, ket)
### VALUES ('210203', 'Izan', 'Bahasa C++', 92, 95, 98, (92 + 95 + 98) / 3, 'LULUS');

### -- Memasukkan data kedua (random)
### INSERT INTO mhs (nim, nama, nama_matkul, nilai1, nilai2, nilai3, rata, ket)
### VALUES ('210204', 'Rani', 'Matematika', 85, 89, 78, (85 + 89 + 78) / 3, 'LULUS');
