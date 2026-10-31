<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produk - StoreJiee</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex" style="min-height: 100vh;">

    <?php include "menu.php"; ?>

    <div class="flex-grow-1 px-4 py-3">
      
      <h2>Section title</h2>
      
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Nama Admin</th>
              <th scope="col">Harga</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            include "../koneksi.php"; 
            
            $query = mysqli_query($dbconnect, "SELECT * FROM tb_barang");
            $no = 1;

            while ($tampil = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
              <td class="text-center fw-medium"><?php echo $no++; ?></td>
              <td class="fw-semibold"><?php echo $tampil["id_produk"]; ?></td>
              <td class="fw-medium"><?php echo $tampil["nama_produk"]; ?></td>
              <td><?php echo $tampil["stok"]; ?></td>
              <td><?php echo $tampil["nama_admin"]; ?></td>
              <td><?php echo $tampil["harga"]; ?></td>
              <td class="text-center">

                <a href="editorder.php?id=<?php echo $tampil['id_produk']?>" class="btn btn-info">Edit</a>

              <form class="d-inline" action="proseshapus.php?id=<?php echo $tampil['id_produk']; ?>" method="post">
              
                <input type="submit" class="btn btn-danger" name="hapus" value="Hapus" onclick="return confirm('Apakah kamu yakin menghapus data dengan id=<?php echo $tampil['id_produk']; ?> ?')">
              </form>


              </td>
            </tr>
            <?php 
            }
            ?>
          </tbody>
        </table>
      </div>

    </div> 
  </div>

</body>
</html>