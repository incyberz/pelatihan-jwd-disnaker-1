<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Katalog Barang ATK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-title {
      font-size: 1rem;
      min-height: 50px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Katalog Barang ATK</h2>
    <div class="row">
      <?php
      $query = "SELECT * FROM tb_barang ORDER BY nama ASC";
      $result = $koneksi->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">' . $row['nama'] . '</h5>
                            <p class="card-text text-primary fw-bold">Rp ' . number_format($row['harga'], 0, ',', '.') . '</p>
                            <form method="post" action="keranjang.php">
                                <input type="hidden" name="id_barang" value="' . $row['id'] . '">
                                <button type="submit" class="btn btn-sm btn-success w-100">Masukkan ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                </div>';
        }
      } else {
        echo '<p class="text-center">Tidak ada barang tersedia.</p>';
      }
      ?>
    </div>
  </div>
</body>

</html>