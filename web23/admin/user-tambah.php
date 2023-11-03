<?php
include ("header.php");
if (isset($_POST["namadepan"])){
    $_namaDepan = $POST["namadepan"];
    $_namaBelakang = $POST["namabelakang"];
    $_uname = $POST["uname"];
    $_pswd = $POST["pswd"];
    $_pswd = password_hash($pswd, PASSWORD_BCRYPT);
    $_konfirmasiPassword = $POST["konfirmasipassword"];
    
    // echo "$namaDepan $namaBelakang $username $password $konfirmasiPassword ";
    include("koneksiadmin.php");
    $SQL = "INSERT INTO user (namadepan, namabelakang, username, password)
            VALUES (?,?,?,?)";
    $statementSQL = $conn->prepare("");
    $statementSQL->bind_param("ssss",$namaDepan, $namaBelakang, $uname, $pswd);
    $statementSQL->execute();
} else {

}
?>

<div class="containe-fluid m-3">
    <h3>TAMBAH USER</h3>
    <p>Silahkan Isi Formulir Dibawah Ini!</p>

<form action="user-tambah   .php" class="was-validated">
<div class="mb-3 mt-3">
    <label for="namadepan" class="form-label">Nama Depan:</label>
    <input type="text" class="form-control" id="namadepan" placeholder="Enter username" name="namadepan" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="namabelakang" class="form-label">Nama Belakang:</label>
    <input type="text" class="form-control" id="namabelakang" placeholder="Enter username" name="namabelakang" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="uname" class="form-label">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3">
    <label for="konfirmasipassword" class="form-label">Konfirmasi Password:</label>
    <input type="password" class="form-control" id="konfirmasipassword" placeholder="Masukkan Konfirmasi password" name="konfirmasipassword" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <!-- <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
    <label class="form-check-label" for="myCheck">I agree on blabla.</label>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>