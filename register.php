<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO GATOFLIX</title>
    <link rel="stylesheet" href="assets/style/style.css" type="text/css">
</head>
<body>
    <div class="signInContainer">
        <div class="column">
            <form action="post">
                <input type="text" name="firstName" placeholder="First name" required>
                <input type="text" name="lastName" placeholder="last name" required>
                <input type="text" name="userName" placeholder="username" required>
                <input type="email" name="email" placeholder="email" >
                <input type="email" name="email2" placeholder="confirm email" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="password" name="password2" placeholder="confirm password" required>
                <input type="submit" name="submitButton" value="submit" >
            </form>
        </div>

    </div>
</body>
</html>