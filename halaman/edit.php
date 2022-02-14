<?php
include "../koneksi.php";

if($_POST['id_berita']) {
    $id = $_POST['id_berita'];
    
    $sql = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita = '$id'");
    foreach ($sql as $data_berita): 
        ?>

        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id_berita" value="<?php echo $data_berita['id_berita']; ?>">
            <div class="form-group">
                <?php 
                echo "<img src=../img/".$data_berita['foto'].">";
                ?><br>
                <label>Judul Berita</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $data_berita['judul']; ?>">
            </div>
            <div class="form-group">
                <label>Foto</label><br>
                <input type="file" id="file" name="foto" required><br>
                <small><?php echo $data_berita['foto']; ?></small>
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea type="text" rows="5" cols="25" class="form-control" id="isi" placeholder="Isi Berita" name="isi"><?php echo $data_berita['isi']; ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
        
        <?php 
    endforeach;
}
?>
<style type="text/css">
    form img{
      width: 70px;
      height: 65px;"
  }
</style>