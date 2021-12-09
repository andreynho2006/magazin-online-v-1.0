<?php

$product_id = $_GET['product_id'];

if (isset($_SESSION['product_id'])) {
    $_SESSION['cart']['product_id']++;
} else {
    $_SESSION['cart']['product_id'] = 1;
}

header('Location: index.php?action=cart');
