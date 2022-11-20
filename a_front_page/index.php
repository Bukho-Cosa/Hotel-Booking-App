<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Front Page </title>

    <style>
        * {
            margin: 0;
        }

        #container{
            width: 100%;
            border: solid;
        }
        #navBar {
            float: right;
            display: flex;
            margin-top: 1rem;
            margin-right: 1rem;
        }

        #navBar img {
            width: 30px;
            height: 30px;
            border-radius: 1rem;
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        #navBar a {
            text-decoration: none;
            color: black;
        }

        #header{
            margin-top: 4rem;
            padding-left: 10rem;
            padding-top: 1rem;
            border-top: solid grey;
            text-align: center;
        }

        #header img {
            width: 150px;
            height: 150px;
            border-radius: 0.5;
            float: left;
            margin-left: 2rem;
        }
        #header h2{
            padding-top: 2rem;
            font-size: 24px;
        }
        #header p{
            font-size: 16px;
        }

        #checkIn{
            margin-top: 5rem;
            border: solid lightgrey;
            background-color: lightgray;
            padding: 1rem;
            justify-content: center;
            text-align: center;
        }
        
    </style>
</head>

<body>
    <!--this is a display page with hardly any logic-->
    <div id="container">
        <div id="navBar">
            <p>ZAR</p>
            <img src="Flag-South-Africa.jpg" alt="ZA flag">
            <a href="../b_login_page/index.php"> Sign In </a>
        </div>
    </div>
    <div id="header">
        <img src="pexels-max-andrey-14270861.jpg" alt="logo">
        <h2>Cozy Trip</h2>
        <h6>Holiday fun for the whole family.</h6>
        <p>Cozy trip provides you with safe holiday stays in all locations. Safe fun for the whole family.</p>
    </div>
    <div id="checkIn">
        <label for="checkIn"> Check In:</label>
        <input type="date">

        <label for="checkOut"> Check Out:</label>
        <input type="date">
    </div>
</body>

</html>