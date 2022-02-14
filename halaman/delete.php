<?php 
include "../koneksi.php";
$id = $_GET['id_berita'];

$sql = mysqli_query($connect, "DELETE FROM tb_berita WHERE id_berita = '$id' ");
 ?>
 <meta http-equiv="refresh" content="0;URL=listberita.php" />