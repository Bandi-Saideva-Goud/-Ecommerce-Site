<?php 
include 'common.php';
if(isset($_SESSION['id'])){
    header('location:product.php');
}
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
        <title>Lifestyle Store</title>
         <link href="index.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
       include 'header.php';
       ?>
        <div id="banner_image" style="margin-top: 50px; height: 80%">
            <div id="banner_content" class="container">
                <h1>We sell lifestyle.</h1>
                <p>Flat 40% OFF on premium brands.</p>
                <a href="login.php" class="btn btn-danger  btn-lg active">Shop Now</a>
            </div>   
        </div>
        <?php 
        include 'footer.php'; 
        ?>
    </body>
</html>
