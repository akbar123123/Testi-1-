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

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link href="../fonts/css/all.css" rel="stylesheet">
  <title>List Komentar</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="#sidebar-container" data-target="#sidebar-container" aria-controls="wrapper" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../admin.php">
      <span class="menu-collapsed">Berita</span>
    </a>
    <div class="dropdown" style="margin-left: 1240px;">
      <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        <i class="fas fa-user-tie"></i>&nbsp;
        Admin
        <i class="caret"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        <a class="dropdown-item" href="../logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
      </div>
    </div>
  </nav>

  <div id="wrapper">
    <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
          <li><a href="../admin.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
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
          <a href="listberita.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-list"></i>&nbsp; 
            <span class="menu-collapsed">
              List Berita
            </span>
          </a>
        </div>
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="listkomentar.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-list"></i>&nbsp; 
            <span class="menu-collapsed">
              List Komentar
            </span>
          </a>
        </div>
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="listkomentar.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-upload"></i>&nbsp; 
            <span class="menu-collapsed">
              Upload Iklan
            </span>
          </a>
        </div>              
      </ul>
    </div>

    <div class="container">
      <h2>Upload Iklan</h2>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iklan">
       Upload Iklan
     </button>
     <div class="table-responsive">
       <input type="hidden" name="id_iklan" value=""><br /><br />
       <form method="POST" action="proses_upload_iklan.php">
         <div class="modal fade" id="iklan">
          <div class="modal-dialog">
           <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Upload Iklan</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">        
              <div class="form-group">
                <label>Gambar Iklan</label><br>
                <input type="file" id="gambar_iklan" name="gambar_iklan" required="">
              </div>
            </div>

            <div class="modal-footer">
             <button type="submit" name="upload" class="btn btn-primary">Upload</button>
           </div>
         </div>
       </div>
     </div>
   </form>

   <div class="container">
    <div class="table-responsive">
     <form method="POST">
      <input type="hidden" name="id_iklan" value="">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
           <th>No</th>
           <th>Gambar Iklan</th>
           <th>Opsi</th>
         </tr>
       </thead>
       <?php

       $halaman = 10;
       $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
       $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
       $result = mysqli_query($connect, "SELECT * FROM tb_iklan");
       $total = mysqli_num_rows($result);
       $pages = ceil($total/$halaman);
       $no =$mulai+1;

       error_reporting(0);
       $query_ambil_iklan = mysqli_query($connect, "SELECT * FROM tb_iklan LIMIT $mulai, $halaman")or die(mysqli_error);      
       while ($iklan = mysqli_fetch_array($query_ambil_iklan)) {
        ?>
        <tbody id="table">
          <tr>
           <td align="center "><?php echo $no++."."; ?></td>
           <td><?php echo $iklan['gambar_iklan']."";?></td>
           <td>
            <a class="btn btn-danger btn-xs" href="proses_delete_iklan.php?id_iklan=<?php echo $iklan['id_iklan']; ?>"onclick="return confirm('Anda yakin..?')">Delete Iklan</a> 
          </td>
        </tr>
      </tbody>
      <?php 
    }
    ?>

  </table>
</form>
</div><br>



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
</div>

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
</style>