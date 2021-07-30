<?php
require 'common.php';
$email_id = mysqli_real_escape_string($con, $_POST['email_id']) or die(mysqli_error($con));
$name = mysqli_real_escape_string($con, $_POST['name']) or  die(mysqli_error($con));
$city = mysqli_real_escape_string($con, $_POST['city']) or die(mysqli_error($con));
$phone = mysqli_real_escape_string($con, $_POST['Contact']) or  die(mysqli_error($con));
$password = md5(mysqli_real_escape_string($con, $_POST['password'])) ;
$query10 = "select u_id from users where email_id = '$email_id'";
$query10_result = mysqli_query($con, $query10) or die(mysqli_error($con));
if($row = mysqli_fetch_array($query10_result)){
    header('location:signup.php?$email_exist=E-Mail already exists');
}
else{

    $user_registration_query = "insert into users (email_id, name, city, phone, password) values 
        ('$email_id', '$name', '$city', '$phone', '$password')" or die(user_registration_query) ;
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    session_start();
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['email_id'] = $email_id;
    header('Location:products.php');
}

?>

