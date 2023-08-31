<?php

$DB_HOST = 'localhost';
$DB_USERNAME = 'n1589736_gpstracklimbungan';
$DB_PASSWORD = '4HJDkDKv}J^t';
$DB_NAME = 'n1589736_gpstrack';


date_default_timezone_set('Asia/Jakarta');


$conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);


if (!$conn) {


    echo 'gagal connect ke database';
}



$lat = $_GET['lat'];
$lng = $_GET['lng'];
$spd = $_GET['spd'];
$date = date("Y-m-d H:i:s");
$table = $_GET['table'];

$TB_NAME = 'tb_marker_' . $table;






if ($lat != '0.000000' && $lng != '0.000000') {

    if ($lat != '' && $lng != '') {

        $query = "INSERT INTO `$TB_NAME`(`id`, `lat`, `lng`, `spd`, `datetime`) VALUES (NULL, '$lat', '$lng', '$spd', '$date')";

        $result = mysqli_query($conn, $query);

        if ($result) {

            echo 'data berhasil di upload';
        } else {
            echo 'data gagal di upload';
        }
    }
}


// http://gpstracklimbungan.site/gpsdata.php?lat=0.000000&lng=0.000000&spd=0&table=muhammadrestuprayudha797@gmail.com