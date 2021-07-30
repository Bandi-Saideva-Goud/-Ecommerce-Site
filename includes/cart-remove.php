<?php
include 'common.php';
session_start();
$item_id3 = $_GET["pid"];
$user_id3 = $_SESSION['id'];
$query11 = "DELETE FROM users_products WHERE status='Added to cart' AND user_id = '$user_id3' AND product_id = '$item_id3' ";
$query11_result  = mysqli_query($con, $query11);
header('location:cart.php');
?>
