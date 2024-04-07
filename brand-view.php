<?php

require 'db.php'
?>

<?php include('include/header.php') ?>

    <div class="container mt-5" >
        
        <div class="row">
            <!--<div class="col-md-12"> -->
               <!-- <div class="card"> -->
                   <!-- <div class="cars-header"> -->
                        <h4>View Brand 
                            <a href="Branch.php" class="btn btn-danger float-end">BACK</a>
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

                        
                           <!-- <input type="text" name="student_id" value="<?= $student_id ?>">-->
                           <!-- <input type="hidden" name="student_id" value="<?= $student['id'] ?>">-->
                            
                        
                            <div class="mb-3">
                            <label>Brand Name</label>
                            <p class="form-control" >
                            <?=$brand['brandname'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <p class="form-control" >
                            <?=$brand['status'];?>
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