<?php
require 'common.php';
if(isset($_SESSION['email_id'])){
    header('location:products.php');
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
        <title>Sign Up</title>
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
        $email_exist = FALSE;
        if($email_exist){
            echo $email_exist;
        }
        ?>
        <div class="container" style="margin-top:50px; padding-left:30%; padding-top:20%">
            <div class="row">
                <div class="col-sm-5">
                    <h1>SIGN UP</h1>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                         <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                         <input type="email" class="form-control" placeholder="Email" name="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                         <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{8,}">
                        </div>
                        <div class="form-group">
                         <input type="tel" class="form-control" placeholder="Contact" name="Contact" pattern=".{7,}">
                        </div>
                        <div class="form-group">
                         <input type="text" class="form-control" placeholder="City" name="city">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" formmethod="post">Submit</button>

                       
                    </form>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
