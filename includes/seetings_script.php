<?php

include 'common.php';
if(!$_SESSION['id']){
    header('location:index.php');
}

$query7 = "select * from users where password = '$_POST['old password']'"  ;
$query7_result = mysqli_query($query7) or die(mysqli_error($con));
$number = mysqli_num_rows($query7) or die(mysqli_error($con));
if($number ==0)
{
      header('location:settings.php?$old="enter old password correctly"');
}



$password1 = mysqli_real_escape_string($con, $_POST['new password']);
$password2 = mysqli_real_escape_string($con, $_POST['Re-new password']);
if($password1==$password2){
    $query8 = select * from users where u_id = $_SESSION['id'];
    $query8_result = mysqli_query($con, $query2);
    $row = mysqli_fetch_array($query2_result);
    $query9 = UPDATE users
            SET users.password = '$password1'
            WHERE users.u_id = row['u_id'];
    $query9_result = mysqli_query($con, $query9);
    header('location:products.php');

}else{  
    header('location:settings.php?$new="re-enter password correctly"');
}
?>

