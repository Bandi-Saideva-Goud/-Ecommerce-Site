<?php
include 'common.php';
session_start();
if(!isset($_SESSION['id'])){
    header('location:login.php');
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
        <title>Cart</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="login.css" rel="stylesheet" type="text/css">
        <link href="index.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php 
       include 'header.php';
       $user1_id = $_SESSION['id'];
       $query3 = " SELECT * FROM products INNER JOIN users_products ON products.p_id = users_products.product_id AND users_products.user_id = '$user1_id' AND users_products.status='Added to cart' ";
       $query3_result = mysqli_query($con, $query3) or die(mysqli_error($con));
       if(!$no_of_rows = mysqli_num_rows($query3_result)){
           echo 'Add items to cart first!';
       }
        else {
               $sum = 0;?>
               <div class="row">
                       <div class="col-xs-12"><h4>Products</h4></div>
               </div>
                       <div class="row">
                       <div class="col-xs-3">Name</div>
                       <div class="col-xs-3">Category</div>
                       <div class="col-xs-3">Price</div>
                       <div class="col-xs-3">Remove</div>
                       </div>
                   <hr>
           <?php while($no_of_rows!=0){ 
            $row = mysqli_fetch_array($query3_result) or die(mysqli_error($con))?>
               <div class="row">
                       <div class="col-xs-3"><?php echo $row['name']; ?></div>
                       <div class="col-xs-3"><?php echo $row['category']; ?></div>
                       <div class="col-xs-3"><?php echo $row['price']; ?></div>
                       <div class="col-xs-3"><?php echo "<a href='cart-remove.php?pid={$row['p_id']}' class='remove_item_link'> Remove</a>" ?></div>
               </div>
              <?php $sum = $sum + $row['price'];
              $no_of_rows = $no_of_rows -1;
                     }?>
                 <hr>
           <div class="row">
                       <div class="col-xs-6"><?php echo "Total:" ?></div>
                       <div class="col-xs-3"><?php echo "RS.".$sum ?></div>
                       <div class="col-xs-3"><?php  echo "<a href='success.php'>Order</a>" ?></div>
            </div>
       <?php }
         
       /* <div class="container" style="margin-top:100px">
            <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr><th>Item Number </th> <th>Item Name </th> <th>Price </th> <th>       </th></tr>
                <tr><td>   </td> <td>   </td> <td> </td> <td> </td></tr>
                <tr><td>  </td> <td>Total </td> <td>Rs 0/-</td> <td> 
                        <a href="success.php"class="btn btn-primary">
                                   Confirm Order
                        </a>
                    </td></tr>					
            </tbody>
        </table>
            </div>
        </div>*/
        
            include 'footer.php';
        ?>
    </body>
</html>
