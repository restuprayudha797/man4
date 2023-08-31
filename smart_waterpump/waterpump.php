<?php

include 'database.php';

date_default_timezone_set("Asia/Jakarta");
$time = date("h:i:sa");
$date = date('Y-m-d', time());
$dateTime = $date . ' / ' . $time;

$level = $_GET['level'];
$water = $_GET['water'];
$flow = $_GET['flow'];

if ($level) {

  $query = "INSERT INTO `level` (`id`, `level`, `timesstamp`) VALUES (NULL, '$level', '$dateTime')";
  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'data level berhasil di tambahkan';

   
  } else {

    echo 'data level gagal di tambahkan';
  }
} elseif ($water) {

  $query = "INSERT INTO `water` (`id`, `waterQuality`, `timesstamp`) VALUES (NULL, '$water', '$dateTime')";
  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'data water berhasil di tambahkan';
    
     if ($water < 40) {
      send_mail();
    }
  } else {

    echo 'data water gagal di tambahkan';
  }
} elseif ($flow) {
  $query = "INSERT INTO `flow` (`id`, `flow`, `timesstamp`) VALUES (NULL, '$flow', '$dateTime')";
  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'data Flow berhasil di tambahkan';
  } else {

    echo 'data Flow gagal di tambahkan';
  }
}
