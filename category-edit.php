<?php
session_start();
require 'db.php'
?>

<?php include('h.php') ?>
<?php include('Navigation.php') ?>
   

    <div class="container mt-5" >
         <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cars-header mt-1">
                        <h4>product Edit 
                            <a href="product.php" class="btn btn-danger float-end ">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['id'])
                        {
                            $product_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cat_db WHERE id='$product_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $cat_db = mysqli_fetch_array($query_run);
                               ?>

                        <form action="category_database.php" method="POST">
                           <!-- <input type="text" name="student_id" value="<?= $product_id ?>">-->
                            <input type="hidden" name="product_id" value="<?= $cat_db['id'] ?>">
                            
                        
                            <div class="mb-3">
                            <label>Category Name</label>
                            <input type="text" name="catname" value="<?=$cat_db['catname'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <input type="text" name="status" value="<?=$cat_db['status'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="update_category" class="btn btn-primary">
                                Update Category</button>
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