<?php  
include 'common.php';
session_start();
if(!$_SESSION['id']){
    header('location:index.php');
}
$user2_id = $_SESSION['id'];
    $query10= " UPDATE users_products SET status='confirmed' WHERE users_products.user_id='$user2_id' " ;
    $query10_result = mysqli_query($con, $query10) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ordered</title>
        
    </head>
    <body>
        <h3>Your order is confirmed.<a href="products.php">click here</a> to purchase any other item.</h3>
    </body>
</html>
