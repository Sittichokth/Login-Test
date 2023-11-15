<?php include('server.php')?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Work</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Logo</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a class="active" href="signin.php">Login</a>
        <a href="register.php">SignUp</a>
    </nav>

    <form action="signin_db.php" method="post">
        <h2>Login</h2>
        <div class="user-input">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="user-input">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="user-input">
            <button type="submit" name="user_login">Login</button>
        </div
    </form>
</body>
</html>