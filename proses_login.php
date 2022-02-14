<?php
session_start(); 
include "koneksi.php";
$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$sql = mysqli_query($connect, "SELECT * FROM tb_login WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($sql);
if (!empty($data)){
  $_SESSION['username'] = $data['username'];
  $_SESSION['password'] = $data['password'];
  setcookie("message","delete",time()-1);
  header("location:admin.php");
}else{
  setcookie("message","Maaf, Username atau password salah",time()+1);
  header("location:login.php");
}
?>