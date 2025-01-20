<?php
    session_start();
    include 'server.php';
        if (isset($_SESSION['id'])) {
            if (is_array($_SESSION['id'])) {
                    foreach ($_SESSION['id'] as $id) {
                        }
                    }
                }
    $query = mysqli_query($conn, "INSERT INTO orders (order_id, user_id) VALUES ('', '{$id}')");


    
    if($query) {
        $last_id = mysqli_insert_id($conn);
        foreach($_SESSION['cart'] as $productId => $productQty) {
            $price = $_POST['shoes'][$productId]['price'];
            $total = $price * $productQty;

            mysqli_query($conn, "INSERT INTO order_det (order_id, prod_id, quantity, price, total) VALUES ('{$last_id}', '{$productId}', '{$productQty}', '{$price}', '{$total}') ");
        }

        unset($_SESSION['cart']);
        $_SESSION['msg'] = 'Checkout order success!';
        header('location: index.php');
        
    } else {
        $_SESSION['msg'] = 'Checkout not complete!!';
        header('location: checkout.php');
    }

?>