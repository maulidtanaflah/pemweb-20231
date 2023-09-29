<?php
function potongArtikel($artikel, $idArtikel) {
    //pisahkan setiap kata lalu masukkan ke dalam array
    $kata = explode(" ",$artikel);

    //gabungkan kembali kata2 berdasarkan wordLimit
    $hasil = implode(" ",array_slice($kata,0,$wordLimit));

    if (count($kata) > $wordLimit){
        funtion potongArtikel($artikel, $idArtikel)
        $hasil .= '<br><a href="artikel.php?id=idArtikel">Read More</a>';
    }

    return $hasil;
}
?>