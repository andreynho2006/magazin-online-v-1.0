<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
include 'html.php';
include 'action.php';
include 'db-product.php';
