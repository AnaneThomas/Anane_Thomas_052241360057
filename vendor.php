<?php
session_start();
require 'db.php';
?>




<?php include('h.php'); ?>

<?php include('Navigation.php') ?>
<div class="wrapper">
    <?php include('message.php'); ?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <br>
                <form action="vendor_database.php" method="POST">

                <div>
                    <h3>Vendor</h3>
                    <div class="row">
                        <div class="col-sm-6 col-sm-3">
                            <div class="form-group" align="left">
                                <label>Vendor Name</label>
                                <input type="text" name="vendorname" id="brand" class="form-control" placeholder="Vendor Name" required>

                            </div>
                        </div>

                        <div class="col-sm-6 col-sm-3">
                            <div class="form-group" align="left">
                                <label>Contact</label>
                                <input type="text" name="contact" id="brand" class="form-control" placeholder="Contact" required>

                            </div>
                        </div>

                        <div class="col-sm-6 col-sm-3">
                            <div class="form-group" align="left">
                            <label>Email</label>
                                <input type="text" name="email" id="brand" class="form-control" placeholder="Email" required>

                            </div>
                        </div>


                        <div class="col-sm-6 col-sm-3">
                            <div class="form-group" align="left">
                                <label>Address</label>
                                <input type="text" name="address" id="brand" class="form-control" placeholder="Address" required>

                            </div>
                        </div>


                        <div class="col-sm-6 col-sm-3">

                            <div class="form-group" align="left">
                                <label>Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Please Select">Please Select</option>
                                    <option value="Active">Active</option>
                                    <option value="DeActive">DeActive</option>
                                </select>

                            </div>                   
                        </div>

                        <div class="col-sm-6 col-sm-3">

                            <div class="form-group" align="left">
                                <label>Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Please Select">Please Select</option>
                                    <option value="Active">Active</option>
                                    <option value="DeActive">DeActive</option>
                                </select>

                            </div>                   
                        </div>

                        

                    </div>  
                    <div align="right">
                        <button type="submit" name="vendor" class="btn btn-primary">Add</button>
                        <button class="btn btn-warning" onclick="move()">Reset</button>
                    </div>
                </div>
                </form>
            </div>
       </div>
    </div>
      <br>

    <div>
        <table id="datatable" class="table table-bordered">
            <thead>
                <th>Vendor Id</th>
                <th>Vendor Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                
                    <?php 
                        $query = "SELECT * FROM vendor";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run)> 0 ){
                            foreach($query_run as $vendor)
                            {
                                ?>
                                    <tr>
                                
                                        <td><?= $vendor['vendor_id']; ?></td>
                                        <td><?= $vendor['vname']; ?></td>
                                        <td><?= $vendor['contact']; ?></td>
                                        <td><?= $vendor['email']; ?></td>
                                        <td><?= $vendor['address']; ?></td>
                                        <td><?= $vendor['status']; ?></td>
                                        <td>
                                           <a href="vendor-edit.php?vendor_id=<?= $vendor['vendor_id'];?>" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="vendor_database.php" method="POST" class="d-inline">   
                                               <button type="submit" name="delete_vendor" value="<?= $vendor['vendor_id']; ?>" class="btn btn-danger btn-sm" onclick="emove()">Delete</button>
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

 

    <?php include('f.php'); ?>