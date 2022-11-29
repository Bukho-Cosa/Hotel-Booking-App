<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hotel Booking App</title>

    <style>
        .logOut {
            width: 30px;
            height: 30px;
            padding-top: 0.3rem;
        }

        .bed {
            width: 20px;
            height: 20px;
        }

        .header {
            display: flex;
        }

        .headerContents {
            display: flex;
            margin-left: 75%;
            margin-right: 0;
            margin-top: 1rem;
        }

        .headerContents a{
            margin-right: 1rem;
            text-decoration: none;
            color: black;
            padding: 0.5rem;
            border: solid black;
            border-radius: 1rem;
            background-color: lightgray;
        }

        .nav {
            margin-top: 2rem;
            display: flex;
            justify-content: space-evenly;
        }

        .section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .box {
            padding: 2rem;
            margin: 1rem;
            box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="header">
        <header class="headerContents">
            <a href=""> Bookings </a>
            <a href=""> Edit Profile </a>
            <svg class="logOut" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                <path d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z" />
            </svg>
        </header>
    </div>
    <div>
        <aside>
            <svg class="bed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zM176 288c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z" />
            </svg>
            <!--<a href="">Hotels</a>-->
            <!--<a href="">Flats</a>-->
            <!--<a href="">Cabins</a>-->
        </aside>
    </div>
    <div class="nav">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <button type="submit" name="filterOption" value="hotel">HOTELS</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <button type="submit" name="filterOption" value="flat">FLATS</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <button type="submit" name="filterOption" value="cabin">CABINS</button>
        </form>
    </div>
    <hr>
    <?php
    if (isset($_GET['filterOption'])) {

        switch ($_GET['filterOption']) {
            case 'hotel':
                include_once __DIR__ . "/views/hotelsTab.php";
                break;

            case 'flat':
                include_once __DIR__ . "/views/flatsTab.php";
                break;

            case 'cabin':
                include_once __DIR__ . "/views/cabinsTab.php";

            default:
                # code...
                break;
        }
    }
    ?>
    <!-- <div>
        <img src="" alt="">
        <h4>
            name of property
        </h4>
        <p>
            cpn
        </p>
        <p>
            no. of rooms
        </p>
        <p>
           available rooms
        </p>
        <br>
        <br>
        <p>
           price
        </p>
        <a href="">View Deal &#62;</a>
    </div>--> 
</body>

</html>