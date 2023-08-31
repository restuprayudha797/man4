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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Toilet</title>

    <!-- Bootstrap 5.3.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<style>
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

    .switch-container {
        display: flex;
        align-items: center;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 80px;
        height: 40px;
    }

    .switch-input {
        display: none;
    }

    .switch-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #e9e9e9;
        border-radius: 10px;
        transition: 0.4s;
    }

    .switch-slider:before {
        position: absolute;
        content: "";
        height: 32px;
        width: 32px;
        left: 4px;
        bottom: 4px;
        background-color: #fff;
        border-radius: 10px;
        transition: 0.4s;
    }

    .switch-input:checked+.switch-slider::before {
        background-color: #0070c0;
    }

    .switch-input:checked+.switch-slider:before {
        transform: translateX(40px);
    }

    .switch-input:checked+.switch-slider:after {
        color: #e9e9e9;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 70%;
    }

    .switch-slider:after {
        color: #b1b1b1;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 30%;
    }

    label {
        margin: 0;
    }

    /* Data */
    .data {
        background-color: #e9e9e9;
        border-radius: 10px;
        display: flex;
        align-items: center;
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

    .data-text {
        margin: 0 0 0 15px;
    }

    .data-text p {
        margin: 0;
    }

    .text {
        color: rgba(114, 114, 114, 0.47);
        font-size: 20px;
        font-weight: 400;
    }

    .number {
        color: #333;
        font-size: 40px;
        font-weight: 700;
    }

    @media screen and (max-width: 768px) {
        .switch-container {
            flex-direction: column;
            align-items: flex-start;
        }

        .switch-slider:after {
            top: 50%;
            left: 15%;
        }

        .switch-input:checked+.switch-slider:after {
            left: 85%;
        }

        .data {
            flex-direction: column;
        }

        .data-text {
            margin: 0;
            margin-top: 10px;
        }

        .text {
            font-size: 16px;
            text-align: center;
        }

        .number {
            font-size: 30px;
            text-align: center;
        }

        .nav-button-data {
            width: 40px;
            height: 40px;
        }

        svg.cont-button {
            width: 25px;
            height: 25px;
        }

        .lucide.lucide-chevron-left.nav-button {
            width: 30px;
            height: 30px;
        }

        .lucide.lucide-refresh-ccw.nav-button {
            width: 24px;
            height: 24px;
        }

        .cont-button-data {
            width: 55px;
            height: 55px;
        }

        svg.cont-button {
            width: 25px;
            height: 25px;
        }
    }
</style>

<body>
    <!-- Start Container -->
    <div class="container mt-3">
        <div class="navbar">
            <a href="index.php">
                <div class="nav-button-data">
                    <i data-lucide="chevron-left" class="nav-button"></i>
                </div>
            </a>
            <a href="">
                <div class="nav-button-data">
                    <i data-lucide="refresh-ccw" class="nav-button"></i>
                </div>
            </a>
        </div>

        <div class="content mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 mb-3 data">
                        <div class="cont-button-data">
                            <i data-lucide="user    " class="cont-button"></i>
                        </div>
                        <div class="data-text">
                            <p class="number"><?= $status ?></p>
                            <?php if ($status == 1) : ?>
                                <P class="text">TIDAK ADA ORANG</P>
                            <?php elseif ($status == 2) : ?>
                                <p class="text">ADA ORANG</p>
                            <?php else : ?>
                                <p class="text">ADA ORANG TERJATUH</p>
                            <?php endif ?>

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>