<?php 
include "koneksi.php";

$id = $_POST['id_berita'];
$judul = $_POST['judul'];
$foto = $_POST['foto'];
$isi = $_POST['isi'];
$viewer == 0;

if (isset($_POST['post'])) {
	// $file = $_FILES['foto']['name'];
	$sql = mysqli_query($connect, "INSERT INTO tb_berita VALUES ('','$_POST[judul]','$_POST[foto]','$_POST[isi]', NOW(),'$viewer')");
	if ($sql) {
		header("location:home.php");	
	}
	elseif ($sql) {
		header("location:admin.php");
	}
	elseif ($sql) {
		header("location:halaman/listberita.php");
	}
}
// move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
?>
<meta http-equiv="refresh" content="0;URL=halaman/listberita.php" />
