<?php
session_start();
require 'db.php'
?>

<?php include('include/header.php') ?>


    <div class="container mt-5" >
         <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cars-header">
                        <h4>Student Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if($_GET['id'])
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM student WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run)> 0 ){
                                $student = mysqli_fetch_array($query_run);
                               ?>

                        <form action="code.php" method="POST">
                           <!-- <input type="text" name="student_id" value="<?= $student_id ?>">-->
                            <input type="hidden" name="student_id" value="<?= $student['id'] ?>">
                            
                        
                            <div class="mb-3">
                            <label>STUDENT Name</label>
                            <input type="text" name="name" value="<?=$student['name'];?>" class="form-control" require>
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Email</label>
                            <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Phone</label>
                            <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control" require>
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Course</label>
                            <input type="course" name="course" value="<?=$student['course'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="update_student" class="btn btn-primary">
                                Update Student</button>
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