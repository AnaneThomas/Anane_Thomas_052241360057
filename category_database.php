<?php
session_start();
require('db.php');

if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete_product']); 

    $query = "DELETE FROM cat_db WHERE id = '$product_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: category.php");
        exit(0);
        
    }else{
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: category.php");
        exit(0);
    }
}


// update edit in database
if(isset($_POST['update_category']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']); 
    $catname = mysqli_real_escape_string($con, $_POST['catname']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE cat_db SET catname='$catname', status='$status' WHERE id='$product_id'";

   $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Category Updated Successfully";
        header("Location: category.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Category Not Updated";
        header("Location: category.php");
        exit(0);
    }

}
// put student info into database
if(isset($_POST['save-product']))
{
    $catname = mysqli_real_escape_string($con, $_POST['catname']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    
    $query = "INSERT INTO cat_db (catname, status) VALUES ('$catname', '$status')";

    //$query = "INSERT INTO student (name, email, phone, course) VALUES (?,?,?,?)";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = " Product Create Successfully";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: category.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Product Not Created";
        header("Location: category.php");
        exit(0);
    }
    
}
