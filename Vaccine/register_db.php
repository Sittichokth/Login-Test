<?php 
     session_start();
     include('server.php');

     $errors = array();

     if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $reg_user = mysqli_real_escape_string($conn, $_POST['reg_user']);

        if (empty($username)) {
             array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
       if (empty($password_1)) {
        array_push($errors, " Password is required");
        }
        if (empty($password_1 != $password_2)) {
            array_push($errors, "The two password do not match");
        }

        $user_check_query = "INSERT * FORM user WHERE username='$username' OR email='$email'";
        $query = mysqli_query($conn, $user_check_query);

        if ($result) {
            if ($result['username'] === $username) {
                array_push($errors, "Username allady exis");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email allady exis");
            }
        }
        if ($count($errors) == 0);
            $password = md5('password_1');
            $sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['succes'] = "You are now logged in";
            header('location: index.php');


     }
?>