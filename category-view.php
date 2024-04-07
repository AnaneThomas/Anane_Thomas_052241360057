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
                            <a href="category.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['id'])
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM brand WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $student = mysqli_fetch_array($query_run);
                               ?>

                        
                           <!-- <input type="text" name="student_id" value="<?= $student_id ?>">-->
                           <!-- <input type="hidden" name="student_id" value="<?= $student['id'] ?>">-->
                            
                        
                            <div class="mb-3">
                            <label>Category Name</label>
                            <p class="form-control" >
                            <?=$student['catname'];?>
                            </p>
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <p class="form-control" >
                            <?=$student['status'];?>
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