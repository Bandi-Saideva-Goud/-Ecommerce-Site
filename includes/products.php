<?php
require 'common.php';
session_start();
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Products</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        include 'Check-if-added.php';
        ?>
        
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
                <div class="row">
                <div class="text-center">
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="2.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Canon EOS</h2>
                        <p>Price:Rs.36000.00</p>
                        <?php 
                            if(!isset($_SESSION['id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(1)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="3.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>GoPro</h2>
                        <p>Price:Rs.30000.00</p>
                           <?php 
                            if(!isset($_SESSION['id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(2)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="4.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>4D</h2>
                        <p>Price:Rs.40000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(3)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="5.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>5PLUS</h2>
                        <p>Price:Rs.20000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(4)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                </div>
                 </div><br><br>
                
                 <div class="row">
                <div class="text-center">
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="9.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Fastrack</h2>
                        <p>Price:Rs.360.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(5)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="10.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Titan</h2>
                        <p>Price:Rs.3000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(6)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="11.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>NEUTRON</h2>
                        <p>Price:Rs.4000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(7)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="12.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>SONATA</h2>
                        <p>Price:Rs.2000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(8)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="7.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>TIMEX</h2>
                        <p>Price:Rs.20000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(9)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                </div>
                 </div><br><br>
                 
                  <div class="row">
                <div class="text-center">
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="13.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Spykar</h2>
                        <p>Price:Rs.3600.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(10)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="14.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Dennis</h2>
                        <p>Price:Rs.30000.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(11)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a>
                    <img class="thumbnail" src="6.jpg" alt="NO IMAGE" style="height: 300px; width: 250px">
                    <div class="caption">
                        <h2>Wrangler</h2>
                        <p>Price:Rs.400.00</p>
                           <?php 
                            if(!isset($_SESSION['email_id'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //we have created a function to check this particular product added to cart or not.
                                if(check_if_added_to_cart(12)){
                                    //This is same as if(check_if_added_to_cart!=0)
                                    echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                }else{
                                    ?>
                        <a href="cart-add.php?pid=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                }
                            }
                        
                        ?>
                    </div>
                        </a>
                    </div>
                </div>
                 </div><br><br>
                 
                 
            </div>
        </div>
        
        <?php
            include 'footer.php';
        ?>
    </body>
</html>