<?php 
include "../koneksi.php";
$id_iklan = $_GET['id_iklan'];

$sql = mysqli_query($connect, "DELETE FROM tb_iklan WHERE id_iklan = '$id_iklan' ");

?>
 <meta http-equiv="refresh" content="0;URL=iklan.php" />