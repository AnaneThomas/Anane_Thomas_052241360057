<?php
session_start();
require 'db.php';
?>



<?php include('h.php'); ?>

<?php include('Navigation.php') ?>

<?php include('message.php') ?>
<div class="wrapper">

   <br> <br> <br> <br>
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-sm-4">
           
            <form action="brand_database.php" method="POST" id="frmcategory">
                    

                    <div class="form-group" align="left">
                        <label>Brand</label>
                        <input type="text" name="brandname" id="brand" class="form-control" placeholder="Brand" required>

                    </div>


                    <div class="form-group" align="left">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Please Select">Please Select</option>
                            <option value="Active">Active</option>
                            <option value="DeActive">DeActive</option>
                        </select>

                    </div>

                    

                    <div align="right" class="mt-2">
                        <button type="submit" name="save-brand" class="btn btn-primary">Add</button>
                        <button class="btn btn-warning" onclick="move()">Reset</button>
                    </div>
                </form>
            </div>

            <div class="col-sm-8">
                <div panel-body>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $query = "SELECT * FROM brand";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run)> 0 ){
                                foreach($query_run as $brand)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $brand['id']; ?></td>
                                        <td><?= $brand['brandname']; ?></td>
                                        <td><?= $brand['status']; ?></td>
                                        <td>
                                            
                                            <a href="brand-edit.php?id=<?= $brand['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                        <form action="brand_database.php" method="POST" class="d-inline">   
                                            <button type="submit" name="delete" value="<?= $brand['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
            </div>
       </div>
    </div>
    

 

    <?php include('f.php'); ?>