<?php

function check_if_added_to_cart($product_id){
    include 'common.php';
    $user_id = $_SESSION['id'];
    $query4 = "select * from users_products WHERE product_id = '$product_id' AND user_id = '$user_id' and status = 'Added to cart'";

    $query4_result = mysqli_query($con, $query4) or die(mysqli_error($con));

    $num_rows = mysqli_num_rows($query4_result);

    return $num_rows;
}
?>
