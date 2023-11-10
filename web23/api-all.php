<?php 
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//hubungkan ke database
include "koneksi.php";
//Inisialisasi array utk menyimpan data berita
$data = array();
// Query SQL untuk mengambil semua data berita
$sql = "SELECT * FROM berita";

// Eksekusi query
$result = mysqli_query($conn, $sql);

// Cek apakah ada data berita
if (mysqli_num_rows($result) > 0) {
    $beritaArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $beritaArray[] = $row;
    }
    $data = $beritaArray;
} else {
    // Jika tidak ada data berita, kirim respon JSON dengan pesan error
    $data['error'] = 'No data found';
}
//tampilkan data dalam format JSON
echo json_encode($data);

//tutup koneksi database
mysqli_close($conn);

?>