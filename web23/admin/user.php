<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<?php
include ("header.php");
?>

<div class="container-fluid mt-3">
  <h3>USER MANAGEMENT</h3>
  <p>List User yang terdaftar pada Aplikasi</p>
  <a class="btn btn-primary" href="user-tambah.php">Tambah User</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM user";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
?>
    <tr>
        <td>John</td>
        <td>Doe</td>
      </tr>  
      <?php 
      }
      mysqli_close($conn);
    ?>
      
    </tbody>
  </table>
</div>

<?php
include ("footer.php");
?>
</body>
</html>