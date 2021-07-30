<?php
include 'common.php';
session_start();
if(!$_SESSION['id']){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="login.css" rel="stylesheet" type="text/css">
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php
       include 'header.php';
       ?>
        
         <div class="container" style="margin-top:50px; padding-left:20%; padding-top:60px">
            <div class="row">
                <div class="col-sm-5">
                    <h1>Change Password</h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                         <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                        </div>
                        <div class="form-group">
                         <input type="password" class="form-control" placeholder="New Password" name="new_password" pattern=".{8,}">
                        </div>
                       <div class="form-group">
                         <input type="password" class="form-control" placeholder="Re-Type New Password" name="Re-new_password" pattern=".{8,}">
                         </div>
                         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        <?php    
            include 'footer.php';
        ?>
    </body>
</html>
