<?php


include './database.php';

$id = $_GET['id'];


if ($id == 1) {




  $query = "UPDATE `switchpump`
SET state = 0";

  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'saklar berhasil dinonaktifkan';
  } else {

    echo 'gagal mematikan perangkat, silahkan hubungi admin untuk memperbaiki masalah ini';
  }
}elseif($id == 2 ){
    
     $query = "UPDATE `switchpump`
SET state = 1";

  $result = mysqli_query($conn, $query);

  if ($result) {

    echo 'saklar berhasil aktifkan';
  } else {

    echo 'gagal mengaktifkan perangkat, silahkan hubungi admin untuk memperbaiki masalah ini';
  }
    
    
}else{
    
    echo 'value id tidak memenuhi syarat, id yang dikirimkan harus berupa int 1 untuk menonaktifkan saklar';
}
