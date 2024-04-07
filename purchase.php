<?php
session_start();
require 'db.php';
?>




<?php include('h.php'); ?>

<?php include('Navigation.php') ?>
<br><br><br><br>
<div class="wrapper">

    <?php include('message.php'); ?>
    <div class="container-fluid">

        <div class="row" align="center">
            <div class="col-sm-8" align="center">
               <!-- <form action="" class="form-horizontal">-->
                    <form action="purchase_database.php" method="POST" class="form-horizontal">

                        <div class="form-group" align="left">

                            <label class="col-sm-3" align="right">Vendor</label>

                            <div class="col-sm-3" align="right">
                                <select class="form-control" id="status" name="vender">
                                    <?php
                                        include('db.php');
                                        $vendor = mysqli_query($con, "select * from vendor");
                                        while($c = mysqli_fetch_array($vendor)){

                                        
                                    ?>
                                    <option value="<?php echo $c['vname'] ?>"> <?php echo $c['vname']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!--<button type="submit" name="save_product" class="btn btn-primary">Search</button>-->

                        </div>
                    </form>
                   <form action="" method="GET">
                        <table class="table table-bordered">
                            <caption>Add Product</caption>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Option</th>
                                <th>Search</th>
                            </tr>
                            <tr>
                            <td>
                                <input type="text" name="prod_id" value="<?php if(isset($_GET['product_id'])) {echo $_GET['product_id'];} ?>" class="form-control" placeholder="Product Code" required>
                            </td>
                                
                            <?php
// ret
                                $con = mysqli_connect("localhost", "root", "", "jpos");

                                if(isset($_GET['prod_id']))
                                {
                                    $pro_id = $_GET['prod_id'];
                                    $query = "SELECT * FROM product WHERE product_id = $pro_id";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                                <form action="purchase_database.php" method="POST">
                                                
                                                    
                                                   
                                                    
                                                    <td>
                                                    <input type="text" name="product_name" value="<?= $row['product_name'];?>" class="form-control" placeholder="Product Name" required>
                                                    </td>

                                                    <td>
                                                    <input type="text" name="price" value="<?= $row['retail_price'];?>" class="form-control" placeholder="Price"  disabled>
                                                    </td>

                                                    <td>
                                                    <input type="number" name="qty"  class="form-control" placeholder="Qty" min="1" value="1" required>
                                                    </td>

                                                    <td>
                                                    <input type="text" name="total" value="547" class="form-control" placeholder="Total"  disabled>
                                                    </td>

                                                    <td>
                                                    <button type="submit" name="save_product" class="btn btn-primary">Search</button>
                                                    </td>
                                                    
                                                </form>
                                                    

                                            <?php
                                        }
                                    }
                                    
                                    
                                }
                                else{

                                    

                                    ?>
                                    <!--
                                    <form action="">
                                    <td>
                                    <input type="text" name="prod_id" value="0000" class="form-control" placeholder="Product Code" required>
                                    </td> 
                                    

                                    <td>
                                    <input type="text" name="product_name" value="000" class="form-control" placeholder="Product Name" required>
                                    </td>
                                    

                                    <td>
                                    <input type="text" name="price" value="0.00" class="form-control" placeholder="Price" required>
                                    </td>

                                    <td>
                                    <input type="number" name="qty"  class="form-control" placeholder="Qty" min="1" value="1" required>
                                    </td>

                                    <td>
                                    <input type="text" name="total" value="0.00" class="form-control" placeholder="Total" required>
                                    </td>

                                    <td>
                                    <button type="submit" name="save_product" class="btn btn-primary">Search</button>
                                    </td>
                                    </form>-->

                                <?php

                                    echo '<script type="text/javascript">
                                        window.onload = function () {alert("No Record Found")};
                                        </script>';
                                }

                                

                            ?>


                              <td>
                                <button type="submit" class="btn btn-success">Add</button>
                            </td>
                            
                                
                                
                            </tr>
                        </table>
                    </form>
                    
                    <table class="table table-bordered">
                    <caption>Products</caption>
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Price Unite</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                       
                        <tbody>

                        <?php 
                        $query = "SELECT * FROM purchase";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run)> 0 ){
                            foreach($query_run as $purchase)
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <form action="purchase_database.php" method="POST" class="d-inline">   
                                               <button type="submit" name="delete_purchase" value="<?= $purchase['id']; ?>" class="btn btn-danger btn-sm" onclick="emove()">Delete</button>
                                            </form>
                                        </td>
                                        <td><?= $purchase['barcode']; ?></td>
                                        <td><?= $purchase['product_name']; ?></td>
                                        <td><?= $purchase['price']; ?></td>
                                        <td><?= $purchase['qty']; ?></td>
                                        <td><?= $purchase['amount']; ?></td>
                      
                                    </tr>
                            
                                <?php
                            }
                        }
                        else{
                            echo "<h5> No Record Found </h5>";
                        }
                    ?>

                        </tbody>
                       

                    </table>
                <!--</form>-->
                    

            </div>

                <div class="col-sm-4">
                    <div class="col s12 m6 offset-m4">

                        <div class="form-group" align="left">
                            <label>Total</label>
                            <input type="text" name="total" id="brand" class="form-control" placeholder="Total" disabled>

                        </div>

                        <div class="form-group" align="left">
                            <label>Pay</label>
                            <input type="text" name="pay" id="brand" class="form-control" placeholder="Balance" require>

                        </div>

                        <div class="form-group" align="left">
                            <label>Due</label>
                            <input type="text" name="due" id="brand" class="form-control" placeholder="Due" disabled>

                        </div>

                        <div class="form-group" align="left">
                           <label>Payment</label>
                            <select class="form-control" id="status" name="payment">
                                <option value="Please Select">Please Select</option>
                                <option value="Active">Cash</option>
                                <option value="DeActive">Cheque</option>
                            </select>
                        </div>

                        <div align="right" class="mt-2">
                            <button type="button" name="save-brand" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-warning" onclick="move()">Reset</button>
                        </div>

                    </div>

                </div>
       </div>
    </div>

 

    <?php include('f.php'); ?>