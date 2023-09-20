<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
// ini adalah komentar single line

# masih sama

/* ini komentar block */

/* $x = 5 + 15 + 5;
echo $x; */

$namaDepan = "Maulidta";
$namaBelakang = "Naflah";

$namaLengkap = $namaDepan." ".$namaBelakang;

echo "Nama saya adalah ".$namaLengkap;
echo "<br>Nama saya adalah $namaLengkap";

$tglMasuk = 2021;
echo "<br>Tanggal masuk kuliah $tglMasuk";
echo "<br>Tanggal masuk kuliah ".$tglMasuk;
?>
</body>
</html>