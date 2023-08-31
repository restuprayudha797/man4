<?php

include 'database.php';

date_default_timezone_set("Asia/Jakarta");
$time = date("h:i:sa");
$date = date('Y-m-d', time());
$dateTime = $date . ' / ' . $time;

$level = $_GET['level'];

if (!$level) {

  echo 'data level harus terisi';
} else {

  $query = "INSERT INTO `water_pump_data` (`id`, `flow`, `timesstamp`) VALUES (NULL, '$level', '$dateTime')";
  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'data berhasil di tambahkan';

    if ($level < 40) {
      send_mail();
    }
  } else {

    echo 'data gagal di tambahkan';
  }
}
