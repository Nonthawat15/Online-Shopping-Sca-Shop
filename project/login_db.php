<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $sql = "SELECT fname FROM user WHERE email = '$email' ";
                $result = mysqli_query($conn, $sql);
                $fname = mysqli_fetch_assoc($result);
                $_SESSION['name'] = $fname;

                $sql = "SELECT id FROM user WHERE email = '$email' ";
                $result = mysqli_query($conn, $sql);
                $id = mysqli_fetch_assoc($result);
                $_SESSION['id'] = $id;
                $_SESSION['success'] = "Your are now logged in";
                header("location: index.php");
            } else {
                array_push($errors, "Wrong Email or Password");
                $_SESSION['error'] = "Wrong Email or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Email & Password is required");
            $_SESSION['error'] = "Email & Password is required";
            header("location: login.php");
        }
    }

?>
