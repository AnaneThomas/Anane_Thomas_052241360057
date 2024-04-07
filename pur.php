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
               <!-- <form action="" class="form-horizontal">
                    <form action="purchase_database.php" method="POST" class="form-horizontal">



                    </form>-->
                   <form action="" method="GET">

                   <div class="form-group" align="left">
                            <div class="col-sm-3" align="right">
                                <td>
                                    <input type="text" name="prod_id" value="<?php if(isset($_GET['product_id'])) 
                                    {
                                        echo $_GET['product_d'];
                                    } ?>" class="form-control" placeholder="Product Code" required>
                                </td>
                            </div>

                                <button type="submit" name="vendor" class="btn btn-primary col-sm-1" align="left">Add</button>
                    </div>
                    <br> <br> <br>


                        <table class="table table-bordered">
                            <tr>
                                
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
                                    
                                                    <div align="left" class="mb-3 col-sm-3">
                                                        <label>Product Name</label>
                                                        <input type="text" name="catname" value="<?=$row['product_name'];?>" class="form-control">
                                                    </div>

                                                    <div align="left" class="mb-3 col-sm-3">
                                                        <label>Price</label>
                                                        <input type="text" name="status" value="<?=$row['retail_price'];?>" class="form-control">
                                                    </div>                                      

                                                    <div align="left" class="mb-3 col-sm-3">
                                                        <label>Qty</label>
                                                        <input type="text" name="status" value="<?=$row['reorderlevel'];?>" class="form-control">
                                                    </div>
                                                    <br>
                                                   <div>
                                                   <button type="submit" name="" class="btn btn-success col-sm-1" align="left">Submit</button>
                                                   </div>
                                                </form>
                                                    

                                            <?php
                                        }
                                    }
                                    
                                    
                                }
                                else{
                                    ?>
                                <?php
                                }
                            ?>
                            </tr>
                        </table>
                    </form>
            </div>

               

                </div>
       </div>
    </div>

 

    <?php include('f.php'); ?>