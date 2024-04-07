<?php
session_start();
require('db.php');

if(isset($_POST['delete']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete']); 

    $query = "DELETE FROM brand WHERE id = '$product_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully";
        header("Location: Branch.php");
        exit(0);
        
    }else{
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: Branch.php");
        exit(0);
    }
}


// update edit in database
if(isset($_POST['update_brand']))
{
    $brand_id = mysqli_real_escape_string($con, $_POST['brand_id']); 
    $brandname = mysqli_real_escape_string($con, $_POST['brandname']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE brand SET brandname='$brandname', status='$status' WHERE id='$brand_id'";

   $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Brand Updated Successfully";
        header("Location: Branch.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Brand Not Updated";
        header("Location: Branch.php");
        exit(0);
    }

}
// put student info into database
if(isset($_POST['save-brand']))
{
    $brandname = mysqli_real_escape_string($con, $_POST['brandname']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    
    $query = "INSERT INTO brand(brandname, status) VALUES ('$brandname', '$status')";

    //$query = "INSERT INTO student (name, email, phone, course) VALUES (?,?,?,?)";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = " Brand Create Successfully";
        header("Location: Branch.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Brand Not Created";
        header("Location: Branch.php");
        exit(0);
    }
    
}
