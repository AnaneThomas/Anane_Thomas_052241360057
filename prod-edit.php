<?php
session_start();
require 'db.php'
?>

<?php include('h.php') ?>

   

    <div class="container mt-5" >
         <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cars-header mt-1">
                        <h4>Product Edit 
                            <a href="prod.php" class="btn btn-danger float-end ">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['product_id'])
                        {
                            $product_id = mysqli_real_escape_string($con, $_GET['product_id']);
                            $query = "SELECT * FROM product WHERE product_id='$product_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $product = mysqli_fetch_array($query_run);
                               ?>

                        <form action="product_database.php" method="POST">
                           <!-- <input type="text" name="student_id" value="<?= $product_id ?>">-->
                            <input type="hidden" name="brand_id" value="<?= $product['product_id'] ?>">
                            
                        
                            <div class="mb-3">
                            <label>Product Name</label>
                            <input type="text" name="productname" value="<?=$product['product_name'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="<?=$product['description'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Category</label>
                            <input type="text" name="category" value="<?=$product['category_id'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Brand</label>
                            <input type="text" name="brand" value="<?=$product['brand_id'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>warranty</label>
                            <input type="text" name="warranty" value="<?=$product['warranty'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Retail Price</label>
                            <input type="text" name="retail" value="<?=$product['retail_price'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Cost Price</label>
                            <input type="text" name="status" value="<?=$product['status'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <input type="text" name="cost" value="<?=$product['cost_price'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Reorder Level</label>
                            <input type="text" name="reorder" value="<?=$product['reorderlevel'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Date</label>
                            <input type="text" name="date" value="<?=$product['date'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <input type="text" name="status" value="<?=$product['status'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="produc" class="btn btn-primary">
                                Update Product</button>
                            </div>
                        </form>

                        <?php
                            }
                            else{
                                echo "<h5> No Such Id Found </h5>";
                            }


                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php') ?>