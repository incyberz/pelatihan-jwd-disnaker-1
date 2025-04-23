<?php
include 'koneksi.php';

// Ambil data berdasarkan ID
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tb_barang WHERE id = $id";
  $result = $koneksi->query($query);

  if ($result->num_rows == 1) {
    $data = $result->fetch_assoc();
  } else {
    echo "Data tidak ditemukan";
    exit;
  }
} else {
  echo "ID tidak ditemukan";
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Edit Data Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2 class="mb-4">Edit Data Barang</h2>
    <form action="proses_edit.php" method="post">
      <input type="hidden" name="id" value="<?= $data['id']; ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="tampil_barang.php" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>

</html>