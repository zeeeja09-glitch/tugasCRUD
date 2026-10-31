<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Isi Pesanan</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="d-flex" style="min-height: 100vh;">
    <!-- Panggil Sidebar -->
    <?php include "menu.php"; ?>

    <!-- Konten Form -->
    <div class="flex-grow-1 px-4 py-3">
      <h3 class="mb-4">Isi Barang Anda</h3>
      
      <form action="prosesinput.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Nama Barang</label>
    <input type="text" name="nama_produk" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" name="stok" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Nama Admin</label>
    <input type="text" name="nama_admin" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>

</body>
</html>