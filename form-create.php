<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Negeri 4 Tanjungpinang</title>
</head>
<body>
	<h3>Formulir Pendaftaran Siswa Baru</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td>Kontent</td>
				<td><textarea name="konten"></textarea></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Daftar</button>
	</form>
</body>
</html>