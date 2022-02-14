<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="shortcut icon" href="img/Logo.jpg">
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

 <!-- Bootstrap -->
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
 <link href="fonts/css/all.css" rel="stylesheet">
 <title>Portal Berita</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="up">
    <a class="navbar-brand" href="#">Berita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
     <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="halaman/list.php">Daftar Berita</a>
      </li>
      <form method="POST">
        <div class="search-container" id="search">
          <input id="search" type="text" name="search" placeholder="Search..." style="margin-left: 719px; padding-left: 10px;">
          <i class="fas fa-search"></i>
        </div>
      </form>
      <li class="nav-item">
        <a href="login.php" class="nav-link" style="margin-left: -20px; font-size: 17px;">Admin</a>
      </li>
    </ul>
  </div>
</nav><br>

<div id="slider" class="carousel slide" data-ride="carousel" style="height: 450px; width: 75%; margin-left: 200px">
  <?php
  error_reporting(0);
  $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita order by id_berita DESC LIMIT 3");
  ?>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php
    $i=0;
    if(count($query_ambil_berita)){
      foreach ($query_ambil_berita as $value) {
        if($i==0){
          echo '<li data-target="#slider" data-slide-to="0" class="active"></li>';
          $i++;
        }
        elseif($i==1){
          echo '<li data-target="#slider" data-slide-to="1"></li>';
          $i++;
        }
        elseif($i==2){
          echo '<li data-target="#slider" data-slide-to="2"></li>';
          $i++;
        }
        else
        {
          echo '<li data-target="#slider" data-slide-to="0"></li>';
          $i++;
        }
      }
    }
    ?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php
    $a=0;
    if(count($query_ambil_berita)){
      foreach ($query_ambil_berita as $value) {
        if($a==0){
          echo '<div class="carousel-item active">
          <img src="img/'.$value['foto'].'" height="500" width="1200">
          <div class="carousel-caption">'.$value['judul'].'</div>
          </div>';
          $a++;
        }
        else
        {
          echo '<div class="carousel-item">
          <img src="img/'.$value['foto'].'" height="500" width="1200">
          <div class="carousel-caption">'.$value['judul'].'</div>
          </div>';
          $a++;
        }
      }
    }
    ?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider" data-slide="prev" aria-hidden="true">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider" data-slide="next" aria-hidden="true">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br><br><br>

<div id="slider" class="carousel slide iklan" data-ride="carousel" style="height: 250px; width: 96%; margin-left: 30px;">
  <?php
  error_reporting(0);
  $query_ambil_iklan = mysqli_query($connect, "SELECT * FROM tb_iklan");
  ?>
  
  <!-- The slideshow -->
  <div class="carousel-inner gambar-iklan">
    <?php
    $a=0;
    if(count($query_ambil_iklan)){
      foreach ($query_ambil_iklan as $iklan) {
        if($a==0){
          echo '<div class="carousel-item active">
          <img src="img/iklan/'.$iklan['gambar_iklan'].'">
          </div>';
          $a++;
        }
        else
        {
          echo '<div class="carousel-item">
          <img src="img/iklan/'.$iklan['gambar_iklan'].'">
          </div>';
          $a++;
        }
      }
    }
    ?>
  </div>
</div><br>


<div class="col-sm-12 col-lg-3  float-right">
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
      echo "<img src=img/".$row['foto'].">";
      ?>
    </div>
    <div class="item-title">
      <small style="font-size: 15px;"><i class="far fa-clock"></i>&nbsp;<?=$row['tanggal'] ?></small><br>
      <a href="detail.php?id_berita=<?php echo $row['id_berita']; ?>">
       <h7 style="margin-bottom: 0px"><?=$row['judul'] ?></h7>
     </a>
   </div>
 </li>
</ul>
<?php 
endforeach
?><br><br>
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
        echo "<img src=img/".$row['foto'].">";
        ?>
      </div>
      <div class="item-title">
        <a href="detail.php?id_berita=<?php echo $row['id_berita']; ?>">
          <h7><?=$row['judul'] ?></h7>
        </a><br>
        <i style="color: red;"><?php 
        echo $row['viewer']." "."Kali Dilihat";
        ?></i>
      </div>
    </li>
    <?php 
  endforeach
  ?>
</ul>
</div>
<div class="card mb-5 rounded-0"  style="margin-left: 20px;">
  <div id="list">
    <ul class="list-group">
      <li class="list-group-item bg-dark" style="font-size: 30px; margin-left: -10px;">Berita Hari Ini
      </li>
    </ul>
  </div>
  <div class="card-body p-5">
    <div class="post-container">
      <div class="row">
        <?php
        $halaman = 4;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $result = mysqli_query($connect, "SELECT * FROM tb_berita");
        $total = mysqli_num_rows($result);
        $pages = ceil($total/$halaman);
        $no =$mulai+1;
        error_reporting(0);
        $search = $_POST['search'];
        $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita WHERE judul LIKE '$search%' order by id_berita DESC LIMIT $mulai, $halaman")or die(mysqli_error);

        foreach ($query_ambil_berita as $row):
          ?>
          <div class="col-sm-6"><br>
           <div class="berita" id="berita">
            <div class="inner"> 
             <a href="detail.php?id_berita=<?php echo $row['id_berita']; ?>" class="thumbnail">
              <div class="img">
                <?php 
                echo "<img src=img/".$row['foto'].">";
                ?>
              </div>
            </a>
            <div class="luar">
             <a href="detail.php?id_berita=<?php echo $row['id_berita']; ?>" aria-hidden="true">
              <h3 style="margin-bottom: 0px"><?=$row['judul'] ?></h3>
            </a>
          </div>   
        </div>
      </div>
    </div>
    <?php 
  endforeach
  ?>
</div>
</div>
</div>
<div class="pagination text-center">
  <a href="?halaman=<?php echo $page-1; ?>">Prev</a>&emsp;
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
    <?php if ($i == $page) : ?>
      <a style="font-weight: bold; color: red;" href="?halaman=<?php echo $i; ?>">&nbsp;<?php echo $i; ?>&nbsp;</a> 
      <?php else : ?>
        <a href="?halaman=<?php echo $i; ?>">&nbsp;<?php echo $i; ?>&nbsp;</a>
      <?php endif; ?>
      <?php } ?>&emsp;
      <a href="?halaman=<?php echo $page+1; ?>">Next</a>
    </div>
  </div>
</div>
<footer class="bg-dark">
  <div class="social-media-footer text-center float-right">
    <h3>Social Media</h3>
    <a href="https://www.facebook.com/akbarramadhani.firdaus"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/d.arcy_ff/?hl=id"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/AkbarRF10"><i class="fab fa-twitter"></i></a>
    <a href="https://www.youtube.com/channel/UCUZh7apFN5g1g4lIfC4dvJA?view_as=subscriber"><i class="fab fa-youtube"></i></a>
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
    <img src="img/Logo.jpg">
  </div>
  <div class="copyright text-center">
    &copy; PortalBerita.com. All Right Reserved
  </div>
</footer>

<script src="assets/js/jquery.js" ></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
<style>

  .iklan{
    margin-left: ; 
    box-sizing: border-box;
    border: 1px solid black;
  }
  .gambar-iklan img{
    width: 100%;
    height: 200px;
  }
  .carousel{
    box-sizing: border-box;
  }
  .carousel-caption{
    color: white;
    font-size: 30px;
    font-family: sans-serif;
    padding-top: -50px;
    background: rgba(0,0,0,0.6);
  }
  /*  .carousel-item img {
    width: 100%;
    height: 480px;
    margin-top: 26px;
    }*/
    .carousel-control-prev span{
      left: 0;
    }
    .carousel-control-next span{
      right: 0;
    }
    .carousel-control-prev , .carousel-control-next{
      padding: 25px;
    }
    .carousel-control-prev span, .carousel-control-next span{
      padding: 18px;
      color: #ffffff;
      font-weight: bold;
      font-size: 15px;
      width: auto;
      position: absolute;
      top: 50%;
      cursor: pointer;
      transition: 0.6s ease;
      border-radius: 50%;
      color: black;
      border: 1px solid black;
    }
    .carousel-control-prev span:hover, .carousel-control-next span:hover{
      background-color: black;
      padding: 20px;
    }
    .carousel-indicators{
      top: 107%;
      color: #FFF; 
    }
    .card{
      padding-left: 10px; 
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
      color: red;
    }
    .item-thumbnail img{
      height: 80px;
      width: 80px;
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
    }
    #list{
      width: 100%;
    }
    #list ul li{
      background-color: #DA4453;
      color: white;
    }
    .luar{
      position: relative;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 0;
      background: rgba(0,0,0,.7);
      text-align: center;
      color: white;
      cursor: pointer;
    }
    .luar a:hover{
      text-decoration: none;
    }
    .luar a h3{
     font-size: 25px;
     text-decoration: none;
   }
   .luar:hover a h3{
     color: #DA4453;
     text-decoration: none;
   }
   .inner{
     overflow: hidden;
   }
   .inner .img{
     transition: all 1.5s ease;
     position: relative;
   }
   .inner:hover .img{
     transform: scale(1.2);
   }
   .card img{
    width: 550px;
    height: 450px;
  }
  .sidenav{
    float:right;
  }
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