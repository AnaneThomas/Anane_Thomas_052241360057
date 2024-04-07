<?php
session_start();
require('db.php');

if(isset($_POST['delete_vendor']))
{
    $vendor_id = mysqli_real_escape_string($con, $_POST['delete_vendor']); 

    $query = "DELETE FROM vendor WHERE vendor_id = '$vendor_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: vendor.php");
        exit(0);
        
    }else{
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: vendor.php");
        exit(0);
    }
}


// update edit in database
if(isset($_POST['update_vendor']))
{
    $vname = mysqli_real_escape_string($con, $_POST['vendorname']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE vendor SET vname='$vname',contact='$contact ', email='$email', address='$address' status='$status' WHERE id='$vendor_id'";

   $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Brand Updated Successfully";
        header("Location: vendor.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Brand Not Updated";
        header("Location: vendor.php");
        exit(0);
    }

}
// put student info into database
if(isset($_POST['vendor']))
{
    $vname = mysqli_real_escape_string($con, $_POST['vendorname']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    
    $query = "INSERT INTO vendor(vname, contact, email, address, status) VALUES ('$vname', '$contact', '$email', '$address', '$status')";

    //$query = "INSERT INTO student (name, email, phone, course) VALUES (?,?,?,?)";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = " Vendor Create Successfully";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: vendor.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Vendor Not Created";
        header("Location: vendor.php");
        exit(0);
    }
    
}
