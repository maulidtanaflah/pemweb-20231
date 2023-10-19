<?php

require'connect.php';

global $conn;
$job=array();
$tempat=array();
$tahun=array();
$info=array();
$sql = 'SELECT * FROM workexp';
$result = $conn->query($sql);

if (!$result) {
    die('Query failed: ' . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    // $job =array($row["job"]);
    array_push($job,$row['job']);
    array_push($tempat,$row['tempat']);
    array_push($tahun,$row['tahun']);
    array_push($info,$row['info']);
}

?>