<?php 
include 'koneksi.php';


if (isset($_POST['postk'])){
	$id = $_POST['id_komentar'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];
	$idBerita = $_POST['id_berita'];
  	$sql = mysqli_query($connect, "INSERT INTO tb_komentar VALUES ('','$nama','$email','$komentar','$idBerita')");
  	if ($sql) {
	$page = $idBerita;
  	header("location:detail.php?id_berita=$page");	
  	}
  }
 ?>