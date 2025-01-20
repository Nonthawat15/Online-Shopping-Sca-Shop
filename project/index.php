<?php 
    session_start();

   if (!isset($_SESSION['name'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['name']);
        header('location: login.php');
    }

    include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sca Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
        <div class="container1">
            <div class="logo">
                <a href="index.php"><img src="images/sca logo.png"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#">NEW ARRIVALS</a></li>
                    <li><a href="#">MEN</a></li>
                    <li><a href="#">WOMEN</a></li>
                    <li><a href="#">KIDS</a></li>
                    <li><a href="#">SALES</a></li>
                </ul>
            </nav>
            <div class="usermenu">
                <?php if (isset($_SESSION['name'])) : ?>
                    <?php
                        if (isset($_SESSION['name'])) {
                            if (is_array($_SESSION['name'])) {
                                // $_SESSION['name'] is an array, loop through and display each name
                                foreach ($_SESSION['name'] as $name) {
                                    echo "<p><strong>$name</strong></p>";
                                }
                            } else {
                                // $_SESSION['name'] is a string, display it directly
                                echo "<p><strong>{$_SESSION['name']}</strong></p>";
                            }
                        }
                    ?>
                    <li><a href="index.php?logout='1'"><img src="images/user.png" alt="Login"></a></li>
                    <li><a href="cart.php"><img src="images/cart.png"></a></li>
                <?php else: ?>
                    <li><a href="login.php"><img src="images/user.png" alt="Login"></a></li>
                    <li><a href="#"><img src="images/cart.png"></a></li>
                <?php endif ?>
            </div>
        </div>
    </section>
    <div class="searchbar">
        <form action="">
            <input type="search" placeholder="Search">
            <button type="submit"><i class="search">Search</i></button>
        </form>
    </div>
    <section class="blog">
        <div class="container2">
            <?php $query = $conn->query("SELECT * FROM shoes"); ?>
                <?php if ($query->num_rows > 0) {
                    while($row = $query->fetch_assoc()) {
                        $image = 'images/'.$row['file_name'];
                        $brand = $row['brand'];
                        $shoesname = $row['name'];
                        $price = $row['price'];
                    ?>
                <div class="product-card">
                    <div class="product-img">
                        <img src="<?php echo $image ?>">
                    </div>
                    <div class="product-info">
                        <h3><?php echo $brand ?></h3>
                        <p><?php echo $shoesname ?><p>
                        <p><?php echo $price ?>฿</p>
                    </div>
                    <a href="cart_add.php?id=<?php echo $row['id']; ?>" ><i class="addtocart">ADD TO CART</i></a>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </section>
    <footer class="footer">
        <p>@2023 Designed by sca2</p>
    </footer>
</body>
</html>