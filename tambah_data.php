<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Data Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2 class="mb-4">Tambah Data Barang</h2>
    <form action="proses_tambah.php" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Pulpen" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga (Rp)</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 2000" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="tampil_barang.php" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>

</html>