<?php
$DB_HOST = "localhost";
$DB_USERNAME = "n1589736_gpstracklimbungan";
$DB_PASS = "4HJDkDKv}J^t";
$DB_NAME = "n1589736_smart_all";

// Create connection
$conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASS, $DB_NAME);
// Check connection

// check condition connection
if (!$conn) {

    echo 'data gagal connect ke database';
}



function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {

        $rows[] = $row;
    }

    return $rows;
}


$table = 'switchpump';

$colorBlue = query("SELECT * FROM $table WHERE ID = 1")[0];
$colorRed = query("SELECT * FROM $table WHERE ID = 2")[0];
$colorGreen = query("SELECT * FROM $table WHERE ID = 3")[0];

$stateBlue = $colorBlue['state'];
$stateRed = $colorRed['state'];
$stateGreen = $colorGreen['state'];

echo $stateBlue . $stateRed . $stateGreen;

$conn->close();