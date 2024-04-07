<?php
session_start();
require 'db.php';
?>




<?php include('h.php'); ?>
<?php include('Navigation.php') ?>

<div class="wrappe">
    
    <br><br><br><br>
    <div class="container-fluid">
    <div><?php include('message.php'); ?></div>
        <div class="row">
            <div class="col-sm-4">
            <form action="category_database.php" method="POST" id="frmcategory">
                    

                    <div class="form-group" align="left">
                        <label>Category</label>
                        <input type="text" name="catname" id="name" class="form-control" placeholder="Category" required>

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
                        <button type="submit" name="save-product" class="btn btn-primary">Add</button>
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
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
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
                                            <a href="category-view.php?id=<?= $cat_db['id']; ?>" class="btn btn-info btn-sm">View</a>
                                        </td>
                                        <td>
                                            <a href="category-edit.php?id=<?= $cat_db['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="category_database.php" method="POST" class="d-inline">   
                                               <button type="submit" name="delete_product" value="<?= $cat_db['id']; ?>" class="btn btn-danger btn-sm" onclick="emove()">Delete</button>
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