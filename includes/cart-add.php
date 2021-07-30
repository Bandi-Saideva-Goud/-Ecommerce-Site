<?php
    include 'common.php';
    session_start();
    $item_id = $_GET["pid"];
    $user_id = $_SESSION['id'];
    $insert_query = "insert into users_products(user_id, product_id, status) values('$user_id', '$item_id', 'Added to cart')";
    $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    header('location:products.php');

?>

