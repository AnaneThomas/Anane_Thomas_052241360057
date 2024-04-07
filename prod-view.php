<?php

require 'db.php'
?>

<?php include('include/header.php') ?>

    <div class="container mt-5" >
        
        <div class="row">
            <!--<div class="col-md-12"> -->
               <!-- <div class="card"> -->
                   <!-- <div class="cars-header"> -->
                        <h4>View Category 
                            <a href="product.php" class="btn btn-danger float-end">BACK</a>
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
                                $student = mysqli_fetch_array($query_run);
                               ?>

                        
                           <!-- <input type="text" name="student_id" value="<?= $student_id ?>">-->
                           <!-- <input type="hidden" name="student_id" value="<?= $student['id'] ?>">-->
                            
                        
                           <div class="mb-3">
                            <label>Product Name</label>
                            <p class="form-control" >
                            <?=$product['product_name'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Description</label>
                            <p class="form-control" >
                            <?=$product['description'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Barcode</label>
                            <p class="form-control" >
                            <?=$product['barcode'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Category</label>
                            <p class="form-control" >
                            <?=$product['category_id'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Brand</label>
                            <p class="form-control" >
                            <?=$product['brand_id'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Warranty</label>
                            <p class="form-control" >
                            <?=$product['warranty'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>retail_price</label>
                            <p class="form-control" >
                            <?=$product['retail_price'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>cost price</label>
                            <p class="form-control" >
                            <?=$product['cost_price'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Reorder Level</label>
                            <p class="form-control" >
                            <?=$product['reorderlevel'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Date</label>
                            <p class="form-control" >
                            <?=$product['date'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <p class="form-control" >
                            <?=$product['status'];?>
                            </p>
                            </div>

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