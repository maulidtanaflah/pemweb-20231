<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//hubungkan ke database
include "koneksi.php";
//hubungkan ke fungsi.php
include "fungsi.php";
//Inisialisasi array untuk menyimpan data berita

$data = array();
//http://
//$id=0;
if(isset($_GET['id']) && cekId($_GET['id'])) {
    $id = $_GET['id'];

    //Query untuk mengambil data berita berita berdasarkan ID
    $sql = "SELECT * FROM berita WHERE id=$id";

// if ($id > 0) {
//     $sql = "SELECT * FROM berita WHERE id=$id";
//}
else {
    $sql = "SELECT * FROM berita";
}
}

//Eksekusi query
$result = mysqli_query($conn, $sql);

//cek apakah data ditemkan
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data = $row;
}

else {
    //Jika data tidak ditemukan, kirim respon JSON dengan pesan error
    $data['error'] = 'Data tidak ditemukan';
}

else {
    $data['error'] = 'Invalid ID';
}
?>