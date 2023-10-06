<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemograman_web";

//buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek koneksi

if (!$conn) {
  die("Koneksi Gagal Say!");
}
 ?>
