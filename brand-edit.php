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
                        <h4>Brand Edit 
                            <a href="Branch.php" class="btn btn-danger float-end ">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['id'])
                        {
                            $brand_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM brand WHERE id='$brand_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $brand = mysqli_fetch_array($query_run);
                               ?>

                        <form action="brand_database.php" method="POST">
                           <!-- <input type="text" name="student_id" value="<?= $brand_id ?>">-->
                            <input type="" name="brand_id" value="<?= $brand['id'] ?>">
                            
                        
                            <div class="mb-3">
                            <label>Brand Name</label>
                            <input type="text" name="brandname" value="<?=$brand['brandname'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <input type="text" name="status" value="<?=$brand['status'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="update_brand" class="btn btn-primary">
                                Update Brand</button>
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