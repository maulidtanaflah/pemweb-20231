<?php
function potongArtikel($artikel, $wordLimit){
  //pisahkan setiap kata lalu masukkan ke dalam array
  $kata = explode(" ", $artikel);

  //gabungkan kembali kata2 berdasarkan wordLimit
  $hasil = implode(" ", array_slice($kata, 0, $wordLimit));

  if (count($kata) > $wordLimit) {
    $hasil .='<br><a href= "artikel.php"> Read more </a>';
  }
  return $hasil;
}
 ?>
