<?php
include 'koneksi.php';
$keyword = $_POST['keyword'] ?? '';
$btn_clear = $keyword ? "<a href=tampil_data.php class='btn btn-info btn-sm'>Clear</a>" : '';


?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Data Barang ATK</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Barang ATK</h2>

    <div class="d-flex justify-content-between">
      <div>
        <a href="tambah_data.php" class="btn btn-primary btn-sm mb-2">Tambah</a>
      </div>
      <div>
        <form method=post class="d-flex gap-2">
          <div>
            <input name=keyword value="<?= $keyword ?>" type="text" class="form-control form-control-sm" placeholder="Cari...">
          </div>
          <div>
            <button class="btn btn-success btn-sm">Cari</button>
          </div>
          <div>
            <?= $btn_clear ?>
          </div>
        </form>
      </div>
    </div>






    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $query = "SELECT * FROM tb_barang 
        WHERE nama LIKE '%$keyword%'
        ORDER BY nama ASC";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama']}</td>
                        <td>" . number_format($row['harga'], 0, ',', '.') . "</td>
                        <td>
                          <a href=ubah_data.php?id=$row[id]>Edit</a> | 
                          <a href=hapus_data.php?id=$row[id] onclick='return confirm(`Hapus barang ini?`)'>Hapus</a>
                        </td>
                    </tr>";
            $no++;
          }
        } else {
          echo "<tr><td colspan='3' class='text-center'>Tidak ada data barang</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>