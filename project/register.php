<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
    <div class="header">
        <img src="images/sca logo.png">
        <p>REGISTER</p>
        <p1>IF YOU'VE ALREADY REGISTERED, <a href="login.php">LOGIN</a></p1>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="register-input-group">
            <div class="input-group">
                <label for="fname" class="my-label">First Name</label>
                <input type="text" name="fname" placeholder="Enter your First Name" class="my-input">
            </div>
            <div class="input-group">
                <label for="lname" class="my-label">Last Name</label>
                <input type="text" name="lname" placeholder="Enter your Last Name" class="my-input">
            </div>
            <div class="input-group">
                <label for="phone" class="my-label">Phone Number</label>
                <input type="int" name="phone" placeholder="081 234 5678" class="my-input">
            </div>
            <div class="input-group">
                <label for="email" class="my-label">Email</label>
                <input type="email" name="email" placeholder="Enter your Email" class="my-input">
            </div>
            <div class="input-group">
                <label for="password_1" class="my-label">Password</label>
                <input type="password" name="password_1" placeholder="Enter your Password" class="my-input">
            </div>
            <div class="input-group">
                <label for="password_2" class="my-label">Confirm Password</label>
                <input type="password" name="password_2" placeholder="Enter your Password" class="my-input">
            </div>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">REGISTER</button>
        </div>
    </form>

</body>
</html>