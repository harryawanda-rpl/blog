<?php

include("config.php");

if(isset($_POST['create'])){

	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$kategori = $_POST['kategori'];
	$konten = $_POST['konten'];

	$sql = "INSERT INTO posts (judul, penulis, kategori, konten)
	VALUE ('$judul', '$penulis', '$kategori', '$konten')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>