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
  <title>ADMIN</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="#wrapper" data-target="#wrapper" aria-controls="wrapper" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="admin.php">
      <span class="menu-collapsed">Berita</span>
    </a>
    <div class="dropdown" style="margin-left: 1240px;">
      <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        <i class="fas fa-user-tie"></i>&nbsp;
        Admin
        <i class="caret"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
      </div>
    </div>
  </nav>

  <div id="wrapper">
    <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
          <li><a href="admin.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
            <i class="fas fa-home"></i>&nbsp;
            <span> Halaman Utama </span>
          </a>
        </li>
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <i class="fas fa-folder-open"></i>&nbsp;
            <span> Berita </span>
          </div>
        </a>
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="halaman/listberita.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-list"></i>&nbsp; 
            <span class="menu-collapsed">
              List Berita
            </span>
          </a>
        </div>
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="halaman/listkomentar.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-list"></i>&nbsp; 
            <span class="menu-collapsed">
              List Komentar
            </span>
          </a>
        </div>
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="halaman/iklan.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-upload"></i>&nbsp; 
            <span class="menu-collapsed">
              Upload Iklan
            </span>
          </a>
        </div>             
      </ul>
    </div>
    
    <div class="container">
      <h2 align="center">Berita Terbaru Hari Ini</h2> 
      <div class="row">
        <?php
        $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita order by id_berita DESC LIMIT 3");
        foreach ($query_ambil_berita as $row):
          ?>
          <div class="col-sm-4">
            <div class="berita">
              <form method="POST">

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
              </form>
            </div>
          </div>
          <?php 
        endforeach
        ?>
      </div>
    </div>

    <div id="page-wrapper">
     <?php 

     if(@$_GET["page"]=='inputberita'){
      include "halaman/inputberita.php";
    }else if(@$_GET["page"]=='listberita'){
      include "halaman/listberita.php";
    }
    ?>
  </div>
</div>
</div>
</div>

<script src="assets/js/jquery.js" ></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
<style type="text/css">
  #body-row{
    font-size: 20px;
  }
  .navbar-brand{
    font-size: 30px;
  }
  #body-row {
    margin-left:0;
    margin-right:0;
  }
  #sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
  }


  .sidebar-expanded {
    width: 230px;
  }
  .sidebar-collapsed {
    width: 60px;
  }


  #sidebar-container .list-group a {
    height: 50px;
    color: white;
  }


  #sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
  }
  .sidebar-submenu {
    font-size: 0.9rem;
  }


  .sidebar-separator-title {
    background-color: #333;
    height: 35px;
  }
  .sidebar-separator {
    background-color: #333;
    height: 25px;
  }

  #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
    content: " \f0d7";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 10px;
  }

  #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
    content: " \f0da";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 10px;
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
    text-decoration: none;
  }
  .luar a:hover{
    text-decoration: none;
  }
  .luar a h3{
    color: white;
   font-size: 25px;
   text-decoration: none;
   margin-top: -8px;
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
  form img{
    width: 350px;
    height: 250px;
    margin-top: 50px;
  }
</style>
