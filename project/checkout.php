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
                    <li><a href="#">Checkout</a></li>
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
            <?php if($rows > 0) {
                    $total = 0;
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
                <div class="container-checkout">
                    <div class="checkout-row">
                        <p>SUBTOTAL</p>
                    </div>
                    <div class="price-row">
                        <p>฿ <?php echo number_format($total, 2); ?></p>
                    </div>
                    <div class="checkout-row">
                        <p>SHIPPING FEE</p>
                    </div>
                    <div class="price-row">
                        <p>฿ 100.00</p>
                    </div>
                    <div class="checkout-row">
                        <p>TAX FEE </p>
                    </div>
                    <div class="price-row">
                        <p>฿ 100.00</p>
                    </div>
                    <div class="checkout-row">
                        <h4>ORDER TOTAL</h4>
                    </div>
                    <div class="price-row">
                        <h4>฿ <?php echo number_format($total + 200, 2); ?></h4>
                    </div>
                    <div class="checkout-row">
                        <h4>PAYMENT METHODS</h4>
                    </div>
                    <div class="price-row">
                        <p style="color: white;">-</p>
                    </div>
                    <div class="checkout-row">
                        <p>CREDIT CARD</p>
                    </div>
                    <div class="price-row">
                        <p>Change</p>
                    </div>
                    <div class="checkout-address">
                        <h4>SHIPPING ADDRESS</h4>
                        <p>LUNG DUM</p>
                        <p>081-234-5678</p>
                        <h5>SRINAKHARINWIROT UNIVERSITY PRASANMIT 114</h5>
                        <h5>SOI SUKHUMVIT 23 WATTHANA DISTRICT BANGKOK</h5>
                    </div>
                </div>
                <div class="checkout-btn">
                    <a href="checkout_db.php"><i class="addtocart">PLACE ORDER</i></a>
                </div>
            </div>
    </section>
    <footer class="footer">
        <p>@2023 Designed by sca2</p>
    </footer>
</body>

</html>