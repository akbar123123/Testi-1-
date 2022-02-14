<?php 
include "../koneksi.php";
$id = $_GET['id'];
$query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id='$id'"); 
$data_berita   = mysqli_fetch_array($query_ambil_berita); 
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Berita</title>
 </head>
 <body>
 	<header class="head">
		<a href="../logout.php">Logout</a>
		<img src="../smkn1bws.png">
	</header><hr />
	<input type="hidden" name="id" value=""><br /><br />
 	<form method="POST">
 		<h3 align="center">Edit Berita</h3>
		<label>Judul</label>
		<input type="text" name="judul" value="<?php echo $data_berita['judul']; ?>"><br><br>
		<label>Foto</label>
		<input type="file" name="foto" required="" value="<?php echo $data_berita['foto']; ?>"><br><br>
		<label>Isi Berita</label>
		<textarea name="isi" rows="5" cols="25" required="" ><?php echo $data_berita['isi']; ?></textarea><br><br>
		<input type="submit" name="post" class="post">
 	</form>
 	<b><footer>
		&copy;Kreatindo 2019
	</footer>
 </body>
 </html>
  <?php 
 if (isset($_POST['post'])) {
 	$sql = mysqli_query($connect, "UPDATE tb_berita SET judul='$_POST[judul]', foto='$_POST[foto]', isi='$_POST[isi]' WHERE id='$id'");
 	if ($sql) {
 		header('location:listberita.php');
 	}
 }
  ?>
  <style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
		font-family: sans-serif;
		font-size: 20px;
	}
	.head{
		background-color: orange;
	}
	.head img{
		width: 100px;
		height: 100px;
		margin-left: 10px;
	}
	.head a{
		width:80px; 
		float:right;
		margin-top: 50px;
		margin-right: 10px;
		text-decoration: none;
		border: 2px solid black;
		color: black;
		border-radius: 5px;
		text-align: center;
	}
	form{
		box-sizing: border-box;
 		width: 400px;
 		height: 550px;
 		padding: 70px;
 		font-size: 12pt;
 		margin: 80px auto;
 		background-color: white;
 		border: 1px solid;
 		margin-top: -20px;
	}
	input{
		height: 25px;
 		width: 240px;
 		text-align: center;
 		border-radius: 5px;
 		background-color: rgba(255, 255, 255, 0.4);
 		font-size: 17px;
	}
	.post{
		width: 70px;
	}
	footer{
		background-color: orange;
		padding: 10px;
		text-align: center;
	}
</style>