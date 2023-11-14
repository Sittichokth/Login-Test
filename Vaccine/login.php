<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login - Vaccine</title>
</head>
<body>
    <form action="register_db.php">
        <h1>SingIN Account</h1>
        <div class="input-gruop">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input-gruop">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
       
        <div class="input-gruop">
            <button type="submit" name="reg_user" id="reg_user">SingIN Now</button>
        </div>
        <p>You not a Account? <a href="register.php">Register</a></p>
    </form>
</body>
</html>