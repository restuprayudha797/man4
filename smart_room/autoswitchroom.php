<?php

// https://gpstracklimbungan.site/MAN4/smart_room/autoswitchroom.php?force=1
include './database.php';

$id = $_GET['force'];


if ($id == 1) {




    $query = "UPDATE `switchroom`
SET state = 0";

    $result = mysqli_query($conn, $query);

    if ($result) {

        echo 'saklar berhasil dinonaktifkan';
    } else {

        echo 'gagal mematikan perangkat, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
} elseif ($id == 2) {

    $query = "UPDATE `switchroom`
    SET state = 2 WHERE `id_switch` = 1 ";

    $result = mysqli_query($conn, $query);

    $query1 = "UPDATE `switchroom`
    SET state = 2 WHERE `id_switch` = 2 ";

    $result1 = mysqli_query($conn, $query1);



    if ($result && $result1) {
    } else {

        echo 'gagal mengaktifkan 1 perangkat, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
} else {

    echo 'value force tidak memenuhi syarat, id yang dikirimkan harus berupa int 1 untuk menonaktifkan saklar';
}
