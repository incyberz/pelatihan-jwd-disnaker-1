<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  // Query hapus data
  $query = "DELETE FROM tb_barang WHERE id = $id";

  if ($koneksi->query($query)) {
    header("Location: tampil_data.php?pesan=hapus_berhasil");
  } else {
    echo "Gagal menghapus data: " . $koneksi->error;
  }
} else {
  echo "ID tidak ditemukan";
}
