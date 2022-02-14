<?php
include '../koneksi.php'; 


$id_viewer = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita='$_GET[id_berita]'");
$idberita = mysqli_fetch_array($id_viewer);
$ip_user = $_SERVER['REMOTE_ADDR']; // untuk menangkap ip pengunjung

mysqli_query($connect, "INSERT INTO tb_viewer (count_id_berita, count_ip, tanggal) VALUES ('$idberita[id_berita]','$ip_user',NOW())");
mysqli_query($connect, "UPDATE tb_berita SET viewer = viewer+1 WHERE id_berita = '$idberita[id_berita]'");
 ?>
 <!-- Per IP Tinggal Ilangin viewer -->