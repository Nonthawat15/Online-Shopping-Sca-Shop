<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($fname)) {
            array_push($errors, "First Name is required");
            $_SESSION['error'] = "First Name is required";
        }
        if (empty($lname)) {
            array_push($errors, "Last Name is required");
            $_SESSION['error'] = "Last Name is required";
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
            $_SESSION['error'] = "Phone Number is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
                $_SESSION['error'] = "Email already exists";
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);
            $sql = "INSERT INTO user (fname,lname,phone,email,password) VALUES ('$fname','$lname','$phone', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['name'] = $fname;
            $sql = "SELECT id FROM user WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            $id = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $id;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            header("location: register.php");
        }
    }

?>