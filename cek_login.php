<?php
session_start();
include 'koneksi.php';

$data_user = $_POST['user'];
$data_password = $_POST['pass'];

$query = mysqli_query($koneksi, "Select * from pengguna where username='$data_user' AND password=md5('$data_password')");
if(mysqli_num_rows($query)==1){
    $_SESSION['user']=$data_user;
    $_SESSION['login']=true;
    header("location:home.php");
}else{
    echo "<script>";
    echo "alert('Username atau Password salah!!!!')";
    echo "window.location.replace('index.php')";
    echo "</script>";
}
?>