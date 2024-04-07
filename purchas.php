<?php
session_start();
require 'db.php';
?>




<?php include('h.php'); ?>

<?php include('Navigation.php') ?>

<?php include('message.php'); ?>
        <div class="container-fluid">

            <div class="row" align="center">
                <div class="col-sm-8" align="center">
                    <form class="form-horizontal">
                        <form action="" class="form-horizontal" method="POST">
                

                            <!-- <div class="col-sm-6 col-sm-3">-->

                                
                                
                                        
                            <!--</div>-->
                            <div class="form-group" align="left">
                            <label>Pay</label>
                            <input type="text" name="pay" id="brand" class="form-control" placeholder="Balance" require>

                            </div>


                        </form>

                       
                        
                    </form>
                    
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











    <?php

// $con = mysqli_connect("localhost", "root", "", "jpos");

 if(isset($_GET['prod_id']))
 {
     $pro_id = $_GET['prod_id'];
    // $query = "SELECT * FROM product WHERE product_id = $pro_id";
     //$query_run = mysqli_query($con, $query);

     //if(mysqli_num_rows($query_run)>0)
     {
         foreach($query_run as $row)
         {
             ?>
               
              <!-- <td>
                 <input type="text" name="prod_id" value="<?php if(isset($_GET['prod_id'])){echo $_GET['prod_id'];}?>" class="form-control" placeholder="Product Code" required>
                 </td> -->

                 <td>
                 <input type="text" name="product_name" value="<?= $row['product_name'];?>" class="form-control" placeholder="Product Name" required>
                 </td>

                 <td>
                 <input type="text" name="price" value="<?= $row['retail_price'];?>" class="form-control" placeholder="Price" required>
                 </td>

                 <td>
                 <input type="number" name="qty"  class="form-control" placeholder="Qty" min="1" value="1" required>
                 </td>

                 <td>
                 <input type="text" name="total" value="547" class="form-control" placeholder="Total" required>
                 </td>

             <?php
         }
     }
     else{
         echo "No Record Found";
     }
     
 }

 

?>









                      <form action="" method="" class="form-horizontal">

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

                        
                        </div>
                    </form>