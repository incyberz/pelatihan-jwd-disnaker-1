<?php
include 'koneksi.php';

if (isset($_POST['id'], $_POST['nama'], $_POST['harga'])) {
  $id = $_POST['id'];
  $nama = $koneksi->real_escape_string($_POST['nama']);
  $harga = intval($_POST['harga']);

  $query = "UPDATE tb_barang SET nama = '$nama', harga = $harga WHERE id = $id";

  if ($koneksi->query($query)) {
    header("Location: tampil_data.php?pesan=berhasil");
  } else {
    echo "Gagal mengupdate data: " . $koneksi->error;
  }
} else {
  echo "Data tidak lengkap";
}
