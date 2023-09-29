<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .fakeimg {
            height: 200px;         
            background: #aaa;
        }
    </style>
</head>
<body>
    <header class="bg-primary container-fluid text-white p-5 text-center">
        <h1>PORTOFOLIO SAYA</h1>
        <p>Data Scientist, AI, Networking</p>        
    </header>
    <nav class="container-fluid navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" 
                data-bs-toggle="collapse" 
                data-bs-target="#menuutama"
                type="button"
                >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuutama">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PORTOFOLIO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section>
            <div class="row">
<?php
include "koneksi.php";
include "fungsi.php";
$id=1;
//Query SQL
$sql = "SELECT * FROM berita WHERE id=$id";

//eksekusi SQL
$hasil = mysqli_query($conn,$sql);

//hitung data yang ada di tabel
$jmlData = mysqli_num_rows($hasil);

//cek apakah ada datanya
if ($jmlData > 0) {

    //tampilkan datanya
    while ($row = mysqli_fetch_assoc($hasil)) {
?>
                <div class="col-sm-6">
                    <h2 class="mt-2"><?= $row["judul"]; ?></h2>
                    <h5><?= $row["subjudul"]; ?>, <?= $row["tgl"]; ?></h5>
                    <div class="fakeimg">Fake Image</div>
                    <p align="justify">
                        <?php
                        echo potongArtikel([$row"isi"],$jmlKata); 
                        ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h2 class="mt-2">Where does it come from?</h2>
                    <h5>Where does it come from?, 23 September 2023</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p align="justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </section>
    </div>
    <div class="bg-dark mt-5 p-4 text-center text-white">
        <p>Footer</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>"></script>
</body>
</html>