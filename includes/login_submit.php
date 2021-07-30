<?php
    require 'common.php';
    $email_id = $_POST['email_id'];
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email_id)) {
        header('location: index.php?$email_error="enter correct email"');
       }
    $password = $_POST['password'];
    if (strlen($password) < 6) {
        header('location: index.php?$password_error="enter correct password"');
    }
    $email_id = mysqli_real_escape_string($con, $_POST['email_id']) or die(mysqli_error($con));
    $password = mysqli_real_escape_string($con, $_POST['password']) or die(mysqli_error($con));
    $password1 = md5($password);
    $query5 = "select email_id, u_id from users where email_id = '$email_id' and password = '$password1'";
    $check_result = mysqli_query($con, $query5);
    $number_of_rows2 = mysqli_num_rows($check_result);
    
    if($number_of_rows2==0){
        header('location:login.php');
    }
    else{
        $row = mysqli_fetch_array($check_result) or die(mysqli_error($con));
        session_start();
        $_SESSION['email_id'] = $row['email_id'];
        $_SESSION['id'] = $row['u_id'];
        header('Location:products.php');
    }
            
?>



