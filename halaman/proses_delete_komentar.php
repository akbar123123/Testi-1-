<?php 
include "../koneksi.php";
$id_komentar = $_GET['id_komentar'];

$sql = mysqli_query($connect, "DELETE FROM tb_komentar WHERE id_komentar = '$id_komentar' ");

?>
 <meta http-equiv="refresh" content="0;URL=listkomentar.php" />