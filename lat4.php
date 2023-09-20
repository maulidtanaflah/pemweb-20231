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
function welcome() {
  echo "Selamat Datang";
}

welcome();

$x = 5;
function fungsiku() {
  // $x = 5;
    echo "<br>Variable x di dalam function adalah ".$GLOBALS['x'];
  }

fungsiku();
echo "<br>Variable x di luar function adalah $x";
?>
</body>
</html>