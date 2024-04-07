<?php
session_start();
?>

<?php include('include/header.php'); ?>
   

    <div class="container mt-5" >
         <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="cars-header">
                        <h4>Student Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                            <label>STUDENT Name</label>
                            <input type="text" name="name" class="form-control" require>
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Email</label>
                            <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Phone</label>
                            <input type="text" name="phone" class="form-control" require>
                            </div>

                            <div class="mb-3">
                            <label>STUDENT Course</label>
                            <input type="course" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="save-student" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php') ?>