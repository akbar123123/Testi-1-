<?php 
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../img/Logo.jpg">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link href="../fonts/css/all.css" rel="stylesheet">

  <title>Daftar Berita</title>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="up">
    <a class="navbar-brand" href="../home.php">Berita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
     <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="../home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list.php">Daftar Berita</a>
      </li>
      <form method="POST">
        <div class="search-container" id="search">
          <input id="search" type="text" name="search" placeholder="Search..." style="margin-left: 780px; padding-left: 10px;">
          <i class="fas fa-search"></i>
        </div>
      </form>
    </ul>
  </div>
</nav><br>
<div class="jumbotron jumbotron-fluid">
	<h1 data-text="Portal Berita" align="center">Portal Berita</h1>
</div><br>

<div class="col-sm-12 col-lg-4  float-right" id="latestupdate">
  <h4 style="border-bottom: 3px solid #343a40">
    Latest Update
  </h4>
  <?php
  error_reporting(0);
  $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita order by id_berita DESC LIMIT 3");

  foreach ($query_ambil_berita as $row):
    ?>
    <ul class="list-group">
      <li class="list-group-item" style="height: 120px;">
        <div class="item-thumbnail">
          <?php 
          echo "<img src=../img/".$row['foto'].">";
          ?>
        </div>
        <div class="item-title">
          <small style="font-size: 15px;"><i class="far fa-clock"></i>&nbsp;<?=$row['tanggal'] ?></small><br>
          <a href="../detail.php?id_berita=<?php echo $row['id_berita']; ?>">
            <h7 style="margin-bottom: 0px"><?=$row['judul'] ?></h7>
          </a>
        </div>
      </li>
      <?php 
    endforeach
    ?>
  </ul><br><br>
  <h4 style="border-bottom: 3px solid #343a40">
    Most Views
  </h4>
  <?php
  error_reporting(0);
  $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita ORDER by viewer DESC LIMIT 5");
  foreach ($query_ambil_berita as $row):
    ?>
    <ul class="list-group">
      <li class="list-group-item" style="height: 120px;">
        <div class="item-thumbnail">
          <?php 
          echo "<img src=../img/".$row['foto'].">";
          ?>
        </div>
        <div class="item-title">
          <a href="detail.php?id_berita=<?php echo $row['id_berita']; ?>">
            <h7 style="margin-bottom: 0px"><?=$row['judul'] ?></h7>
          </a><br>
          <small>
          <i><?php 
          echo $row['viewer']." "."Kali Dilihat";
          ?></i>
        </small>
        </div>
      </li>
      <?php 
    endforeach
    ?>
  </ul>
</div>

<div class="card mb-5 rounded-0">
 <div id="list">
  <ul class="list-group">
    <li class="list-group-item bg-dark" style="font-size: 29px;">Daftar Berita
    </li>
  </ul>
</div>
<?php
$halaman = 5;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$result = mysqli_query($connect, "SELECT * FROM tb_berita");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);
$no =$mulai+1;
error_reporting(0);
$search = $_POST['search'];
$query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita WHERE judul LIKE '%$search%' order by id_berita DESC LIMIT $mulai, $halaman")or die(mysqli_error);

foreach ($query_ambil_berita as $row):
  ?>
  <div class="card-body p-2"> 
    <div class="row">
      <?php echo $no++."."; ?>&nbsp;
        <?php 
        echo "<img src=../img/".$row['foto'].">";
        ?>&nbsp;<small><i class="far fa-clock"></i>&nbsp;<?=$row['tanggal'] ?></small>
    </div><a href="../detail.php?id_berita=<?php echo $row['id_berita']; ?>"><?=$row['judul'] ?></a>
  </div><hr style="border-bottom: 1px solid #aaaa;">
  <?php 
endforeach
?>

<!-- Pagination -->
<div class="pagination text-center">
  <a href="?halaman=<?php echo $page-1; ?>">Prev</a>
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <?php if ($i == $page) : ?>
  &emsp;<a style="font-weight: bold; color: red;" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?>&nbsp;</a> 
  <?php else : ?>
    <a href="?halaman=<?php echo $i; ?>">&nbsp;<?php echo $i; ?></a>&emsp;
  <?php endif; ?>
<?php } ?>
<a href="?halaman=<?php echo $page+1; ?>">Next</a>
</div>
</div>
<!-- End Pagination -->

<footer class="bg-dark">
  <div class="social-media-footer text-center float-right">
    <h3>Social Media</h3>
    <a href="https://www.facebook.com/akbarramadhani.firdaus"><i class="fab fa-facebook"></i></a>
    <i class="fab fa-instagram"><a href=""></a></i>
    <i class="fab fa-twitter"><a href=""></a></i>
    <i class="fab fa-google"><a href=""></a></i>
  </div>
  <div class="pb-footer text-center">
    <h3>Portal Berita</h3>
    <p>
      we make this website very simple and easily accessible
    </p>
  </div>
  <div class="location-footer">
    <h3>Location</h3>
    <p>Jl. Danau Toba 70 B Jember</p>
  </div>
  <div class="gambar-footer">
    <img src="../img/Logo.jpg">
  </div>
  <div class="copyright text-center">
    &copy; PortalBerita.com. All Right Reserved
  </div>
</footer>

<script src="../assets/js/jquery.js" ></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/bootstrap.js"></script>

</body>
</html>
<style type="text/css">
  .pagination{
    padding-left: 10px;
    margin-bottom: 40px;
    display: inline-block;
  }
  .pagination a{
    padding: 8px 16px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    border: 2px solid #ddd;
  }
  .pagination a:hover{
    color: red;
  }
.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

.pagination a:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.pagination a:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
  .card .card-body .row img{
    height: 90px; 
    width: 90px;
  }
  .item-title{
    margin-top: -85px;
    padding-left: 90px; 
  }
  .item-title a{
    color: black;
    text-decoration: none;
    font-size: 18px;
    font-family: sans-serif;
  }
  .item-title a:hover{
    color: #fc0303;
  }
  .item-thumbnail img{
    height: 80px;
    width: 80px;
  }
  #list ul li{
    background-color: #DA4453;
    color: white;
  }
  .card {
    font-size: 30px;
    padding-left: 10px;
  }
  .card .row{
    padding-left: 10px;
  }
  .card .card-body a{
   color: black;
   font-size: 25px;
   position: ;
   margin-top: 30px;
   margin-left: 30px;
 }
 .card a:hover{
   text-decoration: none;
   color: #DA4453;
 }
 small{
  font-size: 18px;
 }
 nav ul li a:hover{
  color: #DA4453;
  border-bottom: 3px solid #DA4453;
}
.navbar-brand{
  font-size: 30px;
}
#up{
  height: 50px;
  border-bottom: 4px solid #305d7b;
  font-size: 20px;
}
a{
  color: white;
  text-align: center;
}
#home{
  color: #FFF;
  font-size: 25px;
}
nav ul .search-container {
  float: right;
  padding: 6px 10px;
  margin-right: 0;
  font-size: 19px;
  border: none;
  cursor: pointer;
  margin-left: 90px;
}
nav ul i{
  color: #aaa;
  right: 40px;
  position: relative;
}
nav ul i:hover{
  color: dodgerblue;
}
.jumbotron{
 margin-top: 26px;
 background-color: #333333;
 text-align: center;
 color: white;
 height: 150px;
 overflow: hidden;
 color: #fff;
 display: flex;
 text-transform: uppercase;
}
.jumbotron h1{
 transition: 1.5s;
 margin-left: 40%;
}
.jumbotron:hover h1{
 filter: blur(20px);
 opacity: 0;
 transform: scale(2);
}
.jumbotron h1:nth-child(10n+1){
 transition-delay: 0s;
}
.jumbotron h1:nth-child(10n+2){
 transition-delay: 0.1s;
}
.jumbotron h1:nth-child(10n+3){
 transition-delay: 0.2s;
}
.jumbotron h1:nth-child(10n+4){
 transition-delay: 0.3s;
}
.jumbotron h1:nth-child(10n+5){
 transition-delay: 0.4s;
}
.jumbotron h1:nth-child(10n+6){
 transition-delay: 0.5s;
}
.jumbotron h1:nth-child(10n+7){
 transition-delay: 0.6s;
}
.jumbotron h1:nth-child(10n+8){
 transition-delay: 0.7s;
}
.jumbotron h1:nth-child(10n+9){
 transition-delay: 0.8s;
}
.jumbotron h1:nth-child(10n+10){
 transition-delay: 0.9s;
}
footer{
    color: #fff;
    width: 100%;
    padding: 0px 0;
    border-top: 4px solid #305d7b;
  }
  .gambar-footer img{
    margin-top: -150px;
    /*margin-left: 15px;*/
    width: 200px;
    height: 195px;
    border-radius: 0px 4px 15px 0px;
  }
  .social-media-footer{
    margin-right: 150px;
    width: 200px;
    margin-top: 30px;
    font-size: 23px;
  }
  .social-media-footer h3{
    border-bottom: 4px dotted #305d7b;
    border-width: 7px;
  }
  .social-media-footer i{
    padding: 7px;
    border-right: 3px solid #305d7b;
    border-left: 3px solid #305d7b;
  }
  .copyright{
    background-color:  #2e3338;
    font-size: 23px;
    padding: 8px;
  }
  .pb-footer{
    width: 250px;
    margin-left: 700px;
    margin-top: 40px;
  }
  .pb-footer h3{
    font-size: 23px;
    border-bottom: 4px dotted #305d7b;
    border-width: 7px;
  }
  .location-footer{
    margin-left: 300px;
    margin-top: -100px;
    text-align: center;
    width: 200px;
  }
  .location-footer h3{
    font-size: 23px;
    border-bottom: 4px dotted #305d7b;
    border-width: 7px;
  }
</style>