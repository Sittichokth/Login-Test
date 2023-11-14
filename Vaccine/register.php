<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register - Vaccine</title>
</head>
<body>
    <h1>Register Account</h1>
    <form action="register_db.php">
        <div class="input-gruop">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input-gruop">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-gruop">
            <label for="password_1">Password</label>
            <input type="password" name="password_1" id="password_1">
        </div>
        <div class="input-gruop">
            <label for="passwrod_2">Confirm Password</label>
            <input type="password" name="password_2" id="password_2">
        </div>
        <div class="input-gruop">
            <button type="submit" name="reg_user" id="reg_user">Register Now</button>
        </div>
        <p>You have a Account? <a href="login.php">SignIN</a></p>
    </form>
</body>
</html>