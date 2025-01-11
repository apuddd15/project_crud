<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$namabuku = $_POST['namabuku'];
$quantity = $_POST['quantity'];
$genre = $_POST['genre'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$id','$namabuku','$quantity', '$genre')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>