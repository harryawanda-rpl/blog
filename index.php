<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
  </style>
</head>
<body>
	<h2>data yang Sudah Mendaftar</h2>
  <a href="form-create.php" class="btn btn-primary">Tambah Data</a>
  <?php if(isset($_GET['status'])): ?>
    <?php
    if($_GET['status'] == 'sukses'){
      echo "Pendaftaran data baru berhasil!";
    } else {
      echo "Pendaftaran gagal!";
    }
    ?>
  <?php endif; ?>
  <table>
    <thead>
      <tr align="center">
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Konten</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = $db->query("SELECT * FROM posts");
      while ($data = $query->fetch_assoc()){ 
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['judul'] ?></td>
        <td><?php echo $data['penulis'] ?></td>
        <td><?php echo $data['kategori'] ?></td>
        <td><?php echo $data['konten'] ?></td>
        <td align="center">
          <a href="form-update.php?id=<?php echo $data['id'] ?>">Edit</a>
          <a onclick="return confirm('Anda yakin ingin menghapus data?')"
          href="delete.php?id=<?php echo $data['id'] ?>">Hapus</a>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
		<p>Total Entri: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</body>
</html>