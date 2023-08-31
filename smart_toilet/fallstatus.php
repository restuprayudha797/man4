<?php

include 'database.php';

date_default_timezone_set("Asia/Jakarta");
$time = date("h:i:sa");
$date = date('Y-m-d', time());
$dateTime = $date . ' / ' . $time;


$status = $_GET['status'];

if ($status) {

  $query = "INSERT INTO `status` (`id`, `status`, `timesstamp`) VALUES (NULL, '$status', '$dateTime')";
  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'data water berhasil di tambahkan';
    
     if ($status > 2) {
      send_mail();
    }
  } else {

    echo 'data water gagal di tambahkan';
  }
} 