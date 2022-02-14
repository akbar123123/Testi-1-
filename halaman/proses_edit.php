<?php
include "../koneksi.php";
$id = $_POST['id_berita'];
$judul = $_POST['judul'];
$foto = $_POST['foto'];
$isi = $_POST['isi'];	

$sql = mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]',foto='$_POST[foto]',isi='$_POST[isi]',tanggal = NOW()  WHERE id_berita='$id'");
?>
<meta http-equiv="refresh" content="0;URL=listberita.php" />