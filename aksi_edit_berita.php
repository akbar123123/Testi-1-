<?php
include "koneksi.php";

//get variabel yg dikirimkan dari form

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$penulis	= $_POST['penulis'];
$isi		= $_POST['isi'];

//get variabel file upload
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
		//untuk keperluan upload gambar//
		$query_ambil_file_gambar_lama	= mysqli_query($connect, "SELECT gambar FROM berita WHERE id_berita = '$id_berita'");
		$data_file_gambar_lama			= mysqli_fetch_array($query_ambil_file_gambar_lama);
		
		unlink("gambar/".$data_file_gambar_lama['gambar']);
		//upload gambar selesai disini//
		
		$query_update	= mysqli_query($connect, "UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi', gambar = '$nama_file' WHERE id_berita = '$id_berita'");
	
		header("Location: admin.php");
	} else {
		$query_update	= mysqli_query($connect, "UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
	
		header("Location: admin.php");
	}
} else {
	$query_update	= mysqli_query($connect, "UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
	
	header("Location: admin.php");
}
?>






<?php
include "../koneksi.php";
$id = $_POST['id_berita'];
$judul = $_POST['judul'];
// $foto = $_POST['foto']; 	
$isi = $_POST['isi'];	

$lokasi_file = $_FILES['../img']['tmp_name'];
$tipe_file   = $_FILES['../img']['type'];
$nama_file   = $_FILES['../img']['name'];
$direktori   = "../img/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
		//untuk keperluan upload gambar//
		$query_ambil_file_gambar_lama	= mysqli_query($connect, "SELECT foto FROM tb_berita WHERE id_berita = '$id'");
		$data_file_gambar_lama			= mysqli_fetch_array($query_ambil_file_gambar_lama);
		
		unlink("../img".$data_file_gambar_lama['foto']);
		//upload gambar selesai disini//
		
		$query_update	= mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]',isi='$_POST[isi]', foto = '$nama_file',tanggal = NOW() WHERE id_berita = '$id'");
	
		header("Location: listberita.php");
	} else {
		$query_update	= mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]',isi='$_POST[isi]',tanggal = NOW() WHERE id_berita = '$id'");
	
		header("Location: listberita.php");
	}
} else {
	$query_update	= mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]',isi='$_POST[isi]',tanggal = NOW() WHERE id_berita = '$id'");
	
	header("Location: listberita.php");
}
?> 
<!-- $sql = mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]',foto='$_POST[foto]',isi='$_POST[isi]',tanggal = NOW()  WHERE id_berita='$id'");
?> -->
<meta http-equiv="refresh" content="0;URL=listberita.php" />