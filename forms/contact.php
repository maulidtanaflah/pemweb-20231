<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $isi = $_POST["isi"];

    // Insert the form data into the database
    $sql = "INSERT INTO contactus (nama, email, subjek, isi) VALUES ('$nama', '$email', '$subjek', '$isi')";

    if ($conn->query($sql) === TRUE) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
