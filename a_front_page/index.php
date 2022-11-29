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

        #container {
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

        #header {
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

        #header h2 {
            padding-top: 2rem;
            font-size: 24px;
        }

        #header p {
            font-size: 16px;
        }

        #checkIn {
            margin-top: 5rem;
            border: solid lightgrey;
            background-color: lightgray;
            padding: 1rem;
            justify-content: center;
            text-align: center;
        }

        #flats{
            margin-top: 1rem;
            display: flex;
            justify-content: space-around;
        }

        section{
            border-radius: 1rem;
            border: solid black;
            padding: 0.5rem;
        }

        #flats img{
            width: 258px;
            height: 258px;
        }

        #hotels{
            margin-top: 1rem;
            display: flex;
            justify-content: space-around;
        }

        #hotels img{
            width: 258px;
            height: 258px;
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
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="checkIn"> Check In:</label>
            <input type="date">

            <label for="checkOut"> Check Out:</label>
            <input type="date">
        </form>
    </div>
    <div id="flats">
        <h3>Flats available: </h3>
        <section id="flat">
            <img src="flats/pexels-anna-filyaeva-2370932.jpg" alt="flat_pexels">
            <h4>Flats in Cape Town</h4>
            <p>Avg. R1 950</p>
        </section>
        <section id="flat">
            <img src="flats/pexels-expect-best-323780.jpg" alt="flat_pexels">
            <h4>Flats in Gqeberha</h4>
            <p>Avg. R1 950</p>
        </section>
        <section id="flat">
            <img src="flats/pexels-max-vakhtbovych-5998117.jpg" alt="flat_pexels">
            <h4>Flats in Johannesburg</h4>
            <p>Avg. R1 950</p>
        </section>
        <section id="flat">
            <img src="flats/pexels-tobias-bjørkli-2119714.jpg" alt="flat_pexels">
            <h4>Flats in Port Alfred</h4>
            <p>Avg. R1 950</p>
        </section>
    </div>

    <div id="hotels">
    <h3>Hotels available: </h3>
        <section id="hotel">
            <img src="hotels/pexels-julie-aagaard-2096983.jpg" alt="hotel_pexels">
            <h4>Hotels in Cape Town</h4>
            <p>Avg. R740</p>
        </section>
        <section id="hotel">
            <img src="hotels/pexels-pixabay-279746.jpg" alt="hotel_pexels">
            <h4>Hotels in Gqeberha</h4>
            <p>Avg. R740</p>
        </section>
        <section id="hotel">
            <img src="hotels/pexels-amar-saleem-70441.jpg" alt="hotel_pexels">
            <h4>Hotels in Johannesburg</h4>
            <p>Avg. R740</p>
        </section>
        <section id="hotel">
            <img src="hotels/pexels-asad-photo-maldives-1287460.jpg" alt="hotel_pexels">
            <h4>Hotels in Port Alfred</h4>
            <p>Avg. R740</p>
        </section>
    </div>
</body>

</html>