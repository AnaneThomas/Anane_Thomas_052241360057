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
                        <h4>Vendor Edit 
                            <a href="vendor.php" class="btn btn-danger float-end ">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['vendor_id'])
                        {
                            $vendor_id = mysqli_real_escape_string($con, $_GET['vendor_id']);
                            $query = "SELECT * FROM vendor WHERE vendor_id='$vendor_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $vendor = mysqli_fetch_array($query_run);
                               ?>

                        <form action="vendor_database.php" method="POST">
                           <!-- <input type="text" name="student_id" value="<?= $vendor_id ?>">-->
                            <input type="hidden" name="vendor_id" value="<?= $vendor['vendor_id'] ?>">
                            
                        
                            <div class="mb-3">
                            <label>Vendor Name</label>
                            <input type="text" name="vendornam" value="<?=$vendor['vname'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Contact</label>
                            <input type="text" name="contact" value="<?=$vendor['contact'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="<?=$vendor['email'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" value="<?=$vendor['address'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>Status</label>
                            <input type="text" name="status" value="<?=$vendor['status'];?>" class="form-control">
                            </div>


                            <div class="mb-3">
                            <button type="submit" name="update_vendor" class="btn btn-primary">
                                Update Vendor</button>
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