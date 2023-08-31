<?php

include './config/functions.php';

$fan1State = query("SELECT state  FROM switchroom WHERE id_switch = 1")[0];
$fan2State = query("SELECT state  FROM switchroom WHERE id_switch = 2")[0];
$lamp1State = query("SELECT state  FROM switchroom WHERE id_switch = 3")[0];
$lamp2State = query("SELECT state  FROM switchroom WHERE id_switch = 4")[0];
$pc1State = query("SELECT state  FROM switchroom WHERE id_switch = 5")[0];
$pc2State = query("SELECT state  FROM switchroom WHERE id_switch = 6")[0];



?>


<!-- start change state Lamp 1 -->
<?php
if (isset($_POST['lamp1TurnOn'])) {

    $queryLamp1TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 3";
    $resultLamp1TurnOn = mysqli_query($conn, $queryLamp1TurnOn);

    if ($resultLamp1TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan Lampu, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['lamp1TurnOff'])) {


    $queryLamp1TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 3";
    $resultLamp1TurnOff = mysqli_query($conn, $queryLamp1TurnOff);

    if ($resultLamp1TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan Lampu, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}


?>
<!-- end change state Lamp 1 -->


<!-- start change state Lamp 2 -->
<?php
if (isset($_POST['lamp2TurnOn'])) {

    $queryLamp2TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 4";
    $resultLamp2TurnOn = mysqli_query($conn, $queryLamp2TurnOn);

    if ($resultLamp2TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan Lampu, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['lamp2TurnOff'])) {


    $queryLamp2TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 4";
    $resultLamp2TurnOff = mysqli_query($conn, $queryLamp2TurnOff);

    if ($resultLamp2TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan Lampu, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
?>
<!-- end change state Lamp 2 -->

<!-- start change state fan 1 -->

<?php

if (isset($_POST['fan1TurnOn'])) {

    $queryfan1TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 1";
    $resultfan1TurnOn = mysqli_query($conn, $queryfan1TurnOn);

    if ($resultfan1TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan Kipas, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['fan1TurnOff'])) {


    $queryFan1TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 1";
    $resultFan1TurnOff = mysqli_query($conn, $queryFan1TurnOff);

    if ($resultFan1TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan KIPAS, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}

?>

<!-- end change state fan 1 -->


<!-- start change state fan 2 -->

<?php

if (isset($_POST['fan2TurnOn'])) {

    $queryfan2TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 2";
    $resultfan2TurnOn = mysqli_query($conn, $queryfan2TurnOn);

    if ($resultfan2TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan Kipas, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['fan2TurnOff'])) {


    $queryFan2TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 2";
    $resultFan2TurnOff = mysqli_query($conn, $queryFan2TurnOff);

    if ($resultFan2TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan KIPAS, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}

?>

<!-- end change state fan 2 -->


<!-- start change state pc 1 -->

<?php

if (isset($_POST['pc1TurnOn'])) {

    $querypc1TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 5";
    $resultpc1TurnOn = mysqli_query($conn, $querypc1TurnOn);

    if ($resultpc1TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan PC, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['pc1TurnOff'])) {


    $querypc1TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 5";
    $resultpc1TurnOff = mysqli_query($conn, $querypc1TurnOff);

    if ($resultpc1TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan PC, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}

?>
<!-- end change state pc 1 -->





<!-- start change state pc 2 -->

<?php

if (isset($_POST['pc2TurnOn'])) {

    $querypc2TurnOn = "UPDATE `switchroom`
    SET state = 2 WHERE id_switch = 6";
    $resultpc2TurnOn = mysqli_query($conn, $querypc2TurnOn);

    if ($resultpc2TurnOn) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal menghidupkan PC, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}
if (isset($_POST['pc2TurnOff'])) {


    $querypc2TurnOff = "UPDATE `switchroom`
    SET state = 1 WHERE id_switch = 6";
    $resultpc2TurnOff = mysqli_query($conn, $querypc2TurnOff);

    if ($resultpc2TurnOff) {

        header('Location: smartRoom.php');
    } else {

        echo 'gagal Mematikan PC, silahkan hubungi admin untuk memperbaiki masalah ini';
    }
}

?>
<!-- end change state pc 2 -->


<!-- start html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Water Pump</title>

    <!-- Bootstrap 5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<style>
    * {
        font-family: "Poppins", sans-serif;
    }

    .title {
        font-size: 20px;
        font-weight: 700;
        text-align: center;
    }

    .data {
        background-color: #e9e9e9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .data-text {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .text {
        color: rgba(114, 114, 114, 0.47);
        font-size: 20px;
        font-weight: 400;
        margin: 0;
    }

    .cont-button-data {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        width: 75px;
        height: 75px;
        background-color: #0070c0;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);
    }

    svg.cont-button {
        width: 30px;
        height: 30px;
        color: #53afee;
        margin: auto;
        stroke-width: 2;
        cursor: pointer;
    }

    button {
        padding: 10px 30px;
        font-size: 14px;
        font-weight: 500;
        border: none;
        border-radius: 5px;
        background-color: #0070c0;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #00569c;
    }

    .color-button {
        background-color: #C70039;
    }

    .color-button:hover {
        background-color: #900C3F;
    }

    .nav-button-data {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background-color: #0070c0;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);
    }

    svg.nav-button {
        color: #53afee;
        margin: auto;
        stroke-width: 1;
        cursor: pointer;
    }

    .lucide.lucide-chevron-left.nav-button {
        width: 30px;
        height: 30px;
    }

    .lucide.lucide-refresh-ccw.nav-button {
        width: 25px;
        height: 25px;
    }


    @media screen and (max-width: 768px) {
        .nav-button-data {
            width: 40px;
            height: 40px;
        }

        svg.cont-button {
            width: 30px;
            height: 30px;
        }

        .data-text {
            margin-top: 10px;
        }

        .title {
            font-size: 18px;
        }

        .lucide.lucide-chevron-left.nav-button {
            width: 30px;
            height: 30px;
        }

        .lucide.lucide-refresh-ccw.nav-button {
            width: 24px;
            height: 24px;
        }
    }
</style>

<body>
    <div class="container mt-3">
        <div class="navbar">
            <a href="index.php">
                <div class="nav-button-data">
                    <i data-lucide="chevron-left" class="nav-button"></i>
                </div>
            </a>
            <div class="switch-container">
                <h3>SMART ROOM</h3>
            </div>
            <a href="">
                <div class="nav-button-data">
                    <i data-lucide="refresh-ccw" class="nav-button"></i>
                </div>
            </a>

        </div>



        <div class="content mt-3">
            <p class="title mt-3">
                Tekan tombol dibawah untuk menyalakan / mematikan perangkat !
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="lightbulb" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Lampu 1</p>
                            <form action="" method="post">
                                <?php if ($lamp1State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="lamp1TurnOn">OFF</button>
                                <?php else : ?>
                                    <button type="submit" class="m-3" name="lamp1TurnOff">ON</button>

                                <?php endif ?>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="lightbulb" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Lampu 2</p>
                            <form action="" method="post">
                                <?php if ($lamp2State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="lamp2TurnOn">OFF</button>
                                <?php else : ?>
                                    <button type="submit" class="m-3" name="lamp2TurnOff">ON</button>

                                <?php endif ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <p class="title">
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="fan" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Kipas 1</p>
                            <form action="" method="post">
                                <?php if ($fan1State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="fan1TurnOn">OFF</button>

                                <?php else : ?>
                                    <button type="submit" class="m-3" name="fan1TurnOff">ON</button>

                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="fan" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Kipas 2</p>
                            <form action="" method="post">
                                <?php if ($fan2State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="fan2TurnOn">OFF</button>

                                <?php else : ?>
                                    <button type="submit" class="m-3" name="fan2TurnOff">ON</button>


                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <p class="title">
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="computer" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Komputer 1</p>
                            <form action="" method="post">
                                <?php if ($pc1State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="pc1TurnOn">OFF</button>

                                <?php else : ?>
                                    <button type="submit" class="m-3" name="pc1TurnOff">ON</button>


                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data m-3">
                            <i data-lucide="computer" class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="">Komputer 2</p>
                            <form action="" method="post">
                                <?php if ($pc2State['state'] == 1) : ?>
                                    <button type="submit" class="m-3 color-button" name="pc2TurnOn">OFF</button>

                                <?php else : ?>
                                    <button type="submit" class="m-3" name="pc2TurnOff">ON</button>


                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lucide Icon -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <!-- Script Bootstrap 5.3.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<!-- end html -->