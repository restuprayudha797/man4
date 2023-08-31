<?php

$DB_HOST = 'localhost';
$DB_USER = 'n1589736_gpstracklimbungan';
$DB_PASS = '4HJDkDKv}J^t';
$DB_NAME = 'n1589736_smart_all';


$conn = mysqli_connect($DB_HOST, $DB_USER,  $DB_PASS, $DB_NAME);


if (!$conn) {



  echo 'gagal terhubung ke database';
}


function query($query)
{

  global $conn;

  $rows = [];

  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {

    $rows[] = $row;
  }

  return $rows;
}


$fan1State = query("SELECT state  FROM switchroom WHERE id_switch = 1")[0];
$fan2State = query("SELECT state  FROM switchroom WHERE id_switch = 2")[0];
$lamp1State = query("SELECT state  FROM switchroom WHERE id_switch = 3")[0];
$lamp2State = query("SELECT state  FROM switchroom WHERE id_switch = 4")[0];
$pc1State = query("SELECT state  FROM switchroom WHERE id_switch = 5")[0];
$pc2State = query("SELECT state  FROM switchroom WHERE id_switch = 6")[0];


echo $fan1State['state'] . $fan2State['state'] . $lamp1State['state'] . $lamp2State['state'] . $pc1State['state'] . $pc2State['state'];