<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <img src="images/sca logo.png">
        <p>LOGIN</p>
        <p1>NOT YET A MEMBER! <a href="register.php">SIGN UP</a></p1>
    </div>

    <form action="login_db.php" method="post">
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
        <div class="input-group">
            <label for="email" class="my-label">Email</label>
            <input type="text" name="email" placeholder="Enter your Email" class="my-input">
        </div>
        <div class="input-group">
            <label for="password" class="my-label">Password</label>
            <input type="password" name="password" placeholder="Enter your Password" class="my-input">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">LOGIN</button>
        </div>
    </form>

</body>
</html>