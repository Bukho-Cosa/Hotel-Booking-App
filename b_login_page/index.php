<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <style> 
        .columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding: 0 10vw;
        }
    </style>
</head>

<body>
    <table>
        <tr class="columns">
            <td>
                <!--login form-->
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <h3>Log In</h3>
                    <br>

                    <label for="logUsername"> Username: </label>
                    <input type="text" name="logUsername" placeholder="e.g. User123" required>

                    <label for="logPasscode"> Password: </label>
                    <input type="password" name="logPasscode" required>

                    <label for="logIn"> Submit </label>
                    <input type="submit" name="logIn">
                </form>
            </td>
            <td>
                <!--registration from-->
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <h3>Register</h3>
                    <br>

                    <label for="username"> Username: </label>
                    <input type="text" name="username" placeholder="e.g. User123" required>

                    <label for="name"> First name(s): </label>
                    <input type="text" name="name" placeholder="e.g. Buhle" required>

                    <label for="surname"> Surname(s): </label>
                    <input type="text" name="surname" placeholder="e.g. Jama"required>

                    <label for="passcode"> Password: </label>
                    <input type="password" name="passcode" required>

                    <label for="email"> Email Address: </label>
                    <input type="email" name="email" placeholder="e.g. buhlejama@email.com"required>

                    <label for="address"> Physical Address: </label>
                    <input type="text" name="address">

                    <label for="register"> Submit </label>
                    <input type="submit" name="register">
                </form>
            </td>
        </tr>
    </table>

</body>

</html>