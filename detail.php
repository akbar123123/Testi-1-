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
      <a class="navbar-brand" href="home.php">Berita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
      </ul>
   </div>
</nav><br>


<div class="jumbotron jumbotron-fluid">
   <h1 data-text="Portal Berita" align="center">Portal Berita
</div>
   <br>

   <div class="container" id="list">
      <?php
      error_reporting(0);
      $idBerita = $_GET['id_berita'];
      $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita = '$idBerita'");
      $data_berita = mysqli_fetch_array($query_ambil_berita);
      ?>
   </div><br>

   <div class="col-sm-12 col-lg-3  float-right" id="latestupdate">
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
?><br><br>

 <img src="img/iklan/iklan 7.jpg" width="300" height="750" style="margin-left: 30px;"><br><br><br><br>


 <img src="img/iklan/iklan 7.jpg" width="300" height="750" style="margin-left: 30px;">

</div>

<div class="card mb-5 rounded-0">
   <div id="list">
      <ul class="list-group">
         <li class="list-group-item bg-dark" style="font-size: 27px;"><?php echo $data_berita['judul'] ?>
         <div class="float-right">
            <i class="fa fa-eye"></i>
            <?php 
            include ("halaman/viewer.php");
            echo $data_berita['viewer'];
            ?>
         </div>
      </li>
   </ul>
</div>

<div class="card-body p-5">
   <div class="post-container">
      <div class="row">
         <div class="col-sm-12 ">
            <div class="berita" id="berita">
               <?php 
               echo "<img src=img/".$data_berita['foto'].">";
               ?><br>
               <p style=" margin-top: 20px; font-size: 20px;">
                  <?php echo $data_berita['isi']; ?><br /><br>
               </p>
            </div>
         </div>
      </div>
   </div>
</div>

<!--Comment-->

<ul class="list-group" style="width: 101%; margin-left: -10px;">
   <?php 
   error_reporting(0);
   $komentar = mysqli_query($connect, "SELECT tb_berita.*, tb_komentar.* FROM tb_berita INNER JOIN tb_komentar ON tb_berita.id_berita  = tb_komentar.id_berita where tb_berita.id_berita = '$idBerita' order by id_komentar DESC");
   ?>
   <li class="list-group-item bg-dark" style="color: white; font-size: 25px;">
      Comments &nbsp;<i class="far fa-comment-dots"></i>
   </li>
   <div>
      <span>
         <h5>
            <?php 
            $count = mysqli_num_rows($komentar); 
            if ($count == 0) {
             echo "There are no comments yet";
          }else{
             echo "$count Comment";
          }
          ?>
       </h5>
    </span>
    <hr />
 </div>
 <div>
   <form method="POST" action="proses_komentar.php">
      <input type="hidden" name="id_berita" value="<?= $data_berita['id_berita']?>">
      <div class="form-group">
         <label>Name</label><br>
         <input type="text" name="nama">
      </div>
      <div class="form-group">
         <label>Email</label><br>
         <input type="email" name="email" >
      </div>
      <div class="form-group">
         <label>Your Comment</label><br>
         <textarea type="text" name="komentar" rows="4" cols="50"></textarea>
      </div>
      <input class="btn btn-primary" type="submit" name="postk" value="Submit">
      <input class="btn btn-danger" type="reset" value="Reset">
   </form>
</div><br><br><br>

<ul class="list-group" style="width: 100%;">
   <li class="list-group-item bg-info" style="color: white; font-size: 25px;">
      Your Comments &nbsp;<i class="far fa-comments"></i>
   </li>
</ul><br>
<?php
while ($rowkomentar = mysqli_fetch_array($komentar)) {
 ?>
 <div id="nama">
  <input type="hidden" name="id_komentar" value="<?= $rowkomentar['id_komentar']?>">
  <?php echo $rowkomentar['nama'] ?> | <?php echo $rowkomentar['email']; ?>
</div>
<div class="komen">
   &nbsp;<?php echo $rowkomentar['komentar'] ?>
</div><br><br><br>

<?php 
}
?>
<hr />

</ul>
</div>


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
    <img src="img/Logo.jpg">
  </div>
  <div class="copyright text-center">
    &copy; PortalBerita.com. All Right Reserved
  </div>
</footer>



<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>

</html>
<style>
  .form-group{
    margin-left: 10px;
  }
   #nama{
      padding-left: 5px;
      font-size: 25px;
      font-weight: bold;
   }
   .komen {
      font-size: 20px;
      border: 1px dashed;
      background-color: #ddddee;
      padding: 5px;
      width: 90%;
      padding-left: 5px;
      margin-top: 8px;
   }

   .card {
      padding-left: 10px;
   }

   .card img {
      width: 100%;
   }

   .item-title {
      margin-top: -85px;
      padding-left: 90px;
   }

   .item-title a {
      color: black;
      text-decoration: none;
      font-size: 18px;
      font-family: sans-serif;
   }

   .item-title a:hover {
      color: red;
   }

   .item-thumbnail img {
      height: 80px;
      width: 80px;
   }

   .container p {
      font-family: sans-serif;
      font-size: 17px;
   }

   nav ul li a:hover {
      color: #DA4453;
      border-bottom: 3px solid #DA4453;
   }

   .navbar-brand {
      font-size: 30px;
   }

   #up {
      height: 50px;
      border-bottom: 4px solid #305d7b;
      font-size: 20px;
   }

   a {
      color: white;
      text-align: center;
   }

   #home {
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

   .jumbotron {
      margin-top: 26px;
      background-color: #333333;
      text-align: center;
      color: white;
      height: 150px;
   }

   #list ul li {
      background-color: #DA4453;
      color: white;
   }
   .jumbotron h1 {
      margin-top: -30px;
      overflow: hidden;
      color: #222;
      transition: all 1.5s ease;
      position: relative;
      font-weight: 700;
      font-size: 3em;
      text-transform: uppercase;
      overflow: hidden;
      background: linear-gradient(90deg, #333333, #fff, #333333);
      background-repeat: no-repeat;
      background-size: 80%;
      animation: animate 4s linear infinite;
      -webkit-background-clip: text;
      -webkit-text-fill-color: rgba(255, 255, 255, 0);
   }

   .jumbotron:hover h1 {
      transform: scale(1.2);
   }

   @keyframes animate {
      0% {
         background-position: -500%;
      }

      100% {
         background-position: 500%;
      }
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