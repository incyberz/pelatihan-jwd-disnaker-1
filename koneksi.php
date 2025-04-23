<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_barang"; // ganti dengan nama database kamu

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// echo "Koneksi berhasil"; // aktifkan ini untuk testing
