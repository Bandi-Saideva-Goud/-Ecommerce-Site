<?php
include 'common.php';
session_start();
if(!$_SESSION['id']){
    header('location:index.php');
}

$old1 = mysqli_real_escape_string($con, $_POST['old_password']) or die(mysqli_error($con));
$old2 = md5($old1);
$user_id6 = $_SESSION['id'];
$query7 = "select * from users where password = '$old2' and users.u_id = '$user_id6' " ;
$query7_result = mysqli_query($con ,$query7) or die(mysqli_error($con));
$row = mysqli_fetch_array($con, $query7_result);
if($row['password'] == $old2)
{
      header('location:settings.php');
}

$password1 = mysqli_real_escape_string($con, $_POST['new_password']);
$password2 = mysqli_real_escape_string($con, $_POST['Re-new_password']);
if($password1==$password2){

    $password3 = md5($password1);
    $user_id5 = $_SESSION['id'];
   
    $query9 ="UPDATE users SET users.password ='$password3' WHERE users.u_id='$user_id5'";
    $query9_result = mysqli_query($con, $query9);
    header('location:products.php');

}else{  
    header('location:settings.php');
}
?>

