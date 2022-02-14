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
  <title>List Berita</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="#wrapper" data-target="#wrapper" aria-controls="wrapper" aria-expanded="false" aria-label="Toggle navigation">
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
          <a href="iklan.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-upload"></i>&nbsp; 
            <span class="menu-collapsed">
              Upload Iklan
            </span>
          </a>
        </div>             
      </ul>
    </div>

    <div class="container">
      <form method="POST">
        <h2>List Berita</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#berita">
         Tambah Berita
       </button>
       <input type="text" name="search" placeholder="Search.." id="search">
       <i class="fas fa-search" aria-hidden="true" id="icon"></i>
     </form>
     <div class="table-responsive">
       <input type="hidden" name="id" value=""><br /><br />
       <form method="POST" action="../proses_tambah.php">
         <div class="modal fade" id="berita">
          <div class="modal-dialog">
           <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Tambah Berita</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">     		
             <div class="form-group">
              <label>Judul Berita</label>
              <input type="text" class="form-control" id="judul" placeholder="Judul Berita" name="judul">
            </div>
            <div class="form-group">
              <label>Foto</label><br>
              <input type="file" id="file" name="foto" required="">
            </div>
            <div class="form-group">
              <label>Isi Berita</label>
              <textarea type="text" rows="5" cols="25" class="form-control" id="isi" placeholder="Isi Berita" name="isi"></textarea>
            </div>
          </div>

          <div class="modal-footer">
           <button type="submit" name="post" class="btn btn-primary">Submit</button>
         </div>
       </div>
     </div>
   </div>
 </form>
 <form method="POST">
   <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
       <th>No</th>
       <th>Judul Berita</th>
       <th>Isi Berita</th>
       <th>Tanggal Upload</th>
       <th>Jumlah Views</th>
       <th>Opsi</th>
     </tr>
   </thead>
   <?php

   $halaman = 10;
   $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
   $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
   $result = mysqli_query($connect, "SELECT * FROM tb_berita");
   $total = mysqli_num_rows($result);
   $pages = ceil($total/$halaman);
   $no =$mulai+1;

   error_reporting(0);
   $search = $_POST['search'];
   $query_ambil_berita = mysqli_query($connect, "SELECT * FROM tb_berita WHERE judul LIKE '%$search%' LIMIT $mulai, $halaman")or die(mysqli_error); 
   while ($data_berita = mysqli_fetch_array($query_ambil_berita)) {
    ?>
    <tbody id="table">
      <tr>
       <td align="center "><?php echo $no++."."; ?></td>
       <td><?php echo $data_berita['judul']."";?></td>
       <td><?php echo substr($data_berita['isi'], 0, 100); ?></td>
       <td><?php echo $data_berita['tanggal']."";?></td>
       <td style="text-align: center;"><?php include ('viewer.php'); echo $data_berita['viewer']."";?></td>
       <td>
        <a class="btn btn-danger btn-xs" href="delete.php?id_berita=<?php echo $data_berita['id_berita']; ?>"onclick="return confirm('Anda yakin..?')">Delete</a> 

        <?php echo "<a href='#berita2' data-target='#berita2' class='btn btn-info btn-small' id='id_berita' data-toggle='modal' data-id=".$data_berita['id_berita'].">Edit</a>"; ?>

      </td>
    </tr>
  </tbody>
  <?php 
}
?>

</table>
</form>

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

<div class="modal fade" id="berita2" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Berita</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="fetched-data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<script src="../assets/js/jquery.js" ></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script  src="script.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#berita2').on('show.bs.modal', function (e) {
      var id = $(e.relatedTarget).data('id');
      $.ajax({
        type : 'post',
        url : 'edit.php',
        data :  'id_berita='+ id,
        success : function(data){
          $('.fetched-data').html(data);
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

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
  #search{
    width: 130px;
    border: 2px solid #ccc;
    font-size: 20px;
    border-radius: 6px;
    background-color: white;
    padding: 3px 5px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    margin:auto;
    position: relative;
  }
  #search:focus {
    width: 30%;
  }
  #icon{
    position: relative;
    right: 40px;
    color: #aaaa;
  }
  #icon:hover{
    color: dodgerblue;
  }
</style>
