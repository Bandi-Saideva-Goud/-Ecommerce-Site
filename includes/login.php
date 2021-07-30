<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="login.css" rel="stylesheet" type="text/css">
        <link href="index.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'header.php'; 
        $email_error = FALSE;
        $password_error = FALSE;
        if($email_error){
             echo $email_error;
        }
        if($password_error){
             echo $password_error;
        }
        ?>
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-warning">
                            <p>Login to make a purchase</p>
                            </div>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email_id" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
         <?php  
            include 'footer.php';
         ?>
    </body>
</html>
