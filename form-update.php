<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"/></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="<?php echo $data['judul']?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="penulis" value="<?php echo $data['penulis']?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $data['kategori']?>"></td>
			</tr>
			<tr>
				<td>Konten</td>
				<td><textarea name="konten"><?php echo $data['konten']?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>