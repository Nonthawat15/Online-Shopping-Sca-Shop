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

    $productIds = [];
    foreach(($_SESSION['cart'] ?? []) as $cartId => $cartQty) {
        $productIds[] = $cartId;
    }

    $ids = 0;
    if(count($productIds) > 0) {
        $ids = implode(', ', $productIds);
    }

    $query = mysqli_query($conn, "SELECT * FROM shoes WHERE id IN ($ids)");
    $rows = mysqli_num_rows($query);
    $total = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <div class="container1">
            <div class="logo">
                <a href="index.php"><img src="images/sca logo.png"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#">Cart</a></li>
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
    </section>
    <section class="blog">
        <div class="container-cart">
            <div class="container-product">
                <div class="topic-row">
                    <p>PRODUCT</p>
                    <p>PRICE</p>
                    <p>AMOUNT</p>
                    <p>TOTAL</p>
                </div>
                <?php if($rows > 0) {
                    while($prod = mysqli_fetch_assoc($query)) {
                        $image = 'images/'.$prod['file_name'];
                        ?>
                <div class="item-row">
                    <div class="cart-item">
                        <div class="box-item">
                            <img src="<?php echo $image ?>">
                        </div>
                        <div class="item-name">
                            <h4><?php echo $prod['model'] ?></h4>
                            <p><?php echo $prod['type'] ?></p>
                        </div>
                    </div>
                    <div class="item-price">
                        <p>฿ <?php echo number_format($prod['price'], 2) ?></p>
                    </div>
                    <div class="item-amount">
                        <p><?php echo $_SESSION['cart'][$prod['id']]; ?></p>
                    </div>
                    <div class="item-total">
                        <p>฿ <?php echo number_format($prod['price'] * $_SESSION['cart'][$prod['id']], 2); ?></p>
                    </div>
                </div>
                <?php
                    $total += intval($prod['price'] * $_SESSION['cart'][$prod['id']], 2);
                    }}
                ?>
            </div>
            <div class="container-user">
                <div class="container-total">
                    <div class="total">
                        <h4>CART TOTAL</h4>
                    </div>
                    <div class="total-price">
                        <p>฿ <?php echo number_format($total, 2); ?></p>
                    </div>
                </div>
                <p></p>
                <div class="checkout-btn">
                    <a href="checkout.php" ><i class="addtocart">CHECKOUT</i></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>@2023 Designed by sca2</p>
    </footer>
</body>

</html>