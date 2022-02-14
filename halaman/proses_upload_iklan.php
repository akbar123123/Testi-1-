<?php 
include "../koneksi.php";

$id = $_POST['id_iklan'];
$gambar_iklan = $_POST['gambar_iklan'];

if (isset($_POST['upload'])) {
	// $file = $_FILES['foto']['name'];
	$sql = mysqli_query($connect, "INSERT INTO tb_iklan VALUES ('','$_POST[gambar_iklan]')");
	if ($sql) {
		header("location:../home.php");	
	}
	elseif ($sql) {
		header("location:../admin.php");
	}
	elseif ($sql) {
		header("location:iklan.php");
	}
}
// move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
?>
<meta http-equiv="refresh" content="0;URL=iklan.php" />
