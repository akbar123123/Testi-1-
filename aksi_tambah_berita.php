<?php
include "koneksi.php";

//get variabel yg dikirimkan dari form

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$penulis	= $_POST['penulis'];
$isi		= $_POST['isi'];
$viewer		==0;

//get variabel file upload
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
				
		$query_tambah	= mysqli_query($connect, "INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '$nama_file','$viewer')");
	
		header("Location: admin.php");
	} else {
		$query_tambah	= mysqli_query($connect, "INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '-','$viewer')");
	
		header("Location: admin.php");
	}
} else {
	$query_tambah	= mysqli_query($connect, "INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '-','$viewer')");
	
	header("Location: admin.php");
}
?>