<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['namabuku'];
$nim = $_POST['quantity'];
$alamat = $_POST['genre'];
 
// update data ke database
mysqli_query($koneksi,"update admin set namabuku='$namabuku', quantity='$quantity', genre='$genre' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>