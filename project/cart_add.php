<?php

    session_start();
    include 'server.php';

    if(!empty($_GET['id'])) {
        if(empty($_SESSION['cart'][$_GET['id']])) {
            $_SESSION['cart'][$_GET['id']] = 1;
        } else {
            $_SESSION['cart'][$_GET['id']] += 1;
        }
    }

    header("location: index.php");