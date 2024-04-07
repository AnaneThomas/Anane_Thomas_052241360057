<?php
session_start();
require 'db.php';
?>




<?php include('h.php'); ?>

<?php include('Navigation.php') ?>
<div class="wrapper">

   <!-- <?php include('message.php'); ?>-->




   <div class="container-fluid">

<div class="row">
    <div class="col-sm-12">
        <form action="vendor.php" method="POST">

        <div>
            <h3>Vendor</h3>
            <div class="row">
                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Product Name</label>
                        <input type="text" name="productname" id="brand" class="form-control" placeholder="Product Name" required>

                    </div>
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Barcode</label>
                        <input type="text" name="barcode" id="brand" class="form-control" placeholder="Barcode" required>

                    </div>
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                    <label>Cost Price</label>
                    <input type="text" name="cost" id="brand" class="form-control" placeholder="Cost price" required>

                    </div>
                </div>


                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Retail Price</label>
                        <input type="text" name="cost" id="brand" class="form-control" placeholder="Cost price" required>

                    </div>
                </div>


                <div class="col-sm-6 col-sm-3">

                    <div class="form-group" align="left">
                        <label>Description</label>
                        <input type="text" name="description" id="brand" class="form-control" placeholder="Description" required>

                    </div>                   
                </div>

                <div class="col-sm-6 col-sm-3">

                    <div class="form-group" align="left">
                        <label>Warranty</label>
                        <input type="text" name="warranty" id="warrnty" class="form-control" placeholder="Warranty" required>
                    </div>                   
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Status</label>
                        <input type="text" name="status" id="brand" class="form-control" placeholder="Status" required>

                    </div>
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Reorder Level</label>
                        <input type="text" name="reorder" id="brand" class="form-control" placeholder="Reorder Level" required>

                    </div>
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Product Date</label>
                        <input type="date" name="date" id="brand" class="form-control" placeholder="product Date" required>

                    </div>
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Category</label>
                        <select class="form-control" id="status" name="category">
                            <?php
                                include('db.php');
                                $category = mysqli_query($con, "select * from cat_db");
                                while($c = mysqli_fetch_array($category)){

                                
                            ?>
                            <option value="<?php echo $c['catname'] ?>"> <?php echo $c['catname']?></option>
                            <?php } ?>
                        </section>

                        
                    </div>                    
                </div>

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label></label>
                        <input type="hidden" class="form-control">

                    </div>
                </div>
                

                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label>Brand</label>
                        <select class="form-control" id="status" name="brand">
                            <?php
                                include('db.php');
                                $brand = mysqli_query($con, "select * from brand");
                                while($c = mysqli_fetch_array($brand)){

                                
                            ?>
                            <option value="<?php echo $c['brandname'] ?>"> <?php echo $c['brandname']?></option>
                            <?php } ?>
                        </section>                     
                    </div>                             
                </div>

                
                <div class="col-sm-6 col-sm-3">
                    <div class="form-group" align="left">
                        <label></label>
                        <input type="hidden" >

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
                <th>Product_Id</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Barcode</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Warranty</th>
                <th>Retail Price</th>
                <th>Cost Price</th>
                <th>Reorder Level</th>
                <th>Status</th>
                <th>Date</th>
               <!-- <th>View</th>-->
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                
                    <?php 
                        $query = "SELECT * FROM product";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run)> 0 ){
                            foreach($query_run as $product)
                            {
                                ?>
                                    <tr>
                                
                                        <td><?= $product['product_id']; ?></td>
                                        <td><?= $product['product_name']; ?></td>
                                        <td><?= $product['description']; ?></td>
                                        <td><?= $product['barcode']; ?></td>
                                        <td><?= $product['category_id']; ?></td>
                                        <td><?= $product['brand_id']; ?></td>
                                        <td><?= $product['warranty']; ?></td>
                                        <td><?= $product['retail_price']; ?></td>
                                        <td><?= $product['cost_price']; ?></td>
                                        <td><?= $product['reorderlevel']; ?></td>
                                        <td><?= $product['date']; ?></td>
                                        <td><?= $product['status']; ?></td>
                                        <!--<td>
                                           <a href="prod-view.php?product_id=<?= $product['product_id'];?>" class="btn btn-info btn-sm">View</a>
                                        </td>-->
                                        <td>
                                           <a href="prod-edit.php?product_id=<?= $product['product_id'];?>" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="product_database.php" method="POST" class="d-inline">   
                                               <button type="submit" name="delete_produc" value="<?= $product['product_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
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