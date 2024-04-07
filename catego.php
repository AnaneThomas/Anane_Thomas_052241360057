<?php
session_start();
require 'db.php';
?>




<!--<?php include('h.php') ?>-->
<div class="wrapper">

     <div class="container-fluid mt-4">
     
     <?php include('message.php'); ?>
        <div class="row">
            <div class="container">

              <!--  <div class="col-md-12"> -->

                    <div class="row">

                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <!-- <div class="card"> -->
                                    <div class="card-body table-bordered table-striped">
                                        <table id="datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $query = "SELECT * FROM cat_db";
                                                $query_run = mysqli_query($con, $query);

                                                if(mysqli_num_rows($query_run)> 0 ){
                                                    foreach($query_run as $cat_db)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><?= $cat_db['id']; ?></td>
                                                            <td><?= $cat_db['catname']; ?></td>
                                                            <td><?= $cat_db['status']; ?></td>
                                                            <td>
                                                                <a href="student-view.php?id=<?= $cat_db['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                                <a href="student-edit.php?id=<?= $cat_db['id']; ?>" class="btn btn-success btn-sm">E</a>
                                                                <form action="code.php" method="POST" class="d-inline">
                                                                <button type="submit" name="delete_student" value="<?= $cat_db['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                                </from>
                                                            </td>
                                                    </tr>
                                                        <?php
                                                    }
                                                }
                                                else{
                                                    echo "<h5> No Record Found </h5>";
                                                }
                                            ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                            <!-- </div> -->
                        </div>


                    </div>
               <!-- </div> -->
            </div>
        </div>
     </div>
</div>

     <!--<?php include('include/footer.php') ?> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('#datatable').DataTable({
          
        });
        
    </script>
        
    </script>
  </body>
</html>

