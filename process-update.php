<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$kategori = $_POST['kategori'];
	$konten = $_POST['konten'];

	$sql = "UPDATE posts SET judul='$judul', penulis='$penulis',
	kategori='$kategori', konten='$konten' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>