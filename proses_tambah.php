<?php
include 'koneksi.php';

if (isset($_POST['nama'], $_POST['harga'])) {
  $nama = $koneksi->real_escape_string($_POST['nama']);
  $harga = intval($_POST['harga']);

  $query = "INSERT INTO tb_barang (nama, harga) VALUES ('$nama', $harga)";

  if ($koneksi->query($query)) {
    header("Location: tampil_data.php?pesan=tambah_berhasil");
  } else {
    echo "Gagal menambahkan data: " . $koneksi->error;
  }
} else {
  echo "Data tidak lengkap!";
}
