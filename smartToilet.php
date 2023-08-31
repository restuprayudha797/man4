<?php

include './config/functions.php';


$data = query("SELECT * FROM status");

foreach ($data as $row) {

    $status = $row['status'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART TOILET</title>
</head>

<body>

    <center>
        <h1>
            <?= $status ?>
        </h1>

        <a href="">
            <button>Refresh</button>
        </a>
    </center>

</body>

<script>


</script>

</html>