<?php
session_start();
require('db.php');

if(isset($_POST['delete_produc']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete_produc']); 

    $query = "DELETE FROM product WHERE product_id = '$product_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: prod.php");
        exit(0);
        
    }else{
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: prod.php");
        exit(0);
    }
}


// update edit in database
if(isset($_POST['produc']))
{
    $productname = mysqli_real_escape_string($con, $_POST['productname']);
    $barcode = mysqli_real_escape_string($con, $_POST['barcode']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);
    $retail = mysqli_real_escape_string($con, $_POST['retail']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $warranty = mysqli_real_escape_string($con, $_POST['warranty']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $reorder = mysqli_real_escape_string($con, $_POST['reorder']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);

    $query = "UPDATE product SET product_name='$productname', barcode='$barcode', category_id='$retail', brand_id='$brand', warranty='$warranty', retail_price='$retail', cost_price='$cost', reorderlevel='$reorder', date='$date' status='$status' WHERE id='$product_id'";

   $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Product Updated Successfully";
        header("Location: prod.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Product Not Updated";
        header("Location: prod.php");
        exit(0);
    }

}
// put product info into database
if(isset($_POST['product']))
{
    $productname = mysqli_real_escape_string($con, $_POST['productname']);
    $barcode = mysqli_real_escape_string($con, $_POST['barcode']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);
    $retail = mysqli_real_escape_string($con, $_POST['retail']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $warranty = mysqli_real_escape_string($con, $_POST['warranty']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $reorder = mysqli_real_escape_string($con, $_POST['reorder']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);

    
    $query = "INSERT INTO product(product_name, description, barcode, category_id, brand_id, warranty, retail_price, cost_price, reorderlevel, date, status) VALUES ('$productname', '$description', ' $barcode', '$category', '$brand', '$warranty', ' $retail', ' $cost', ' $reorder', '$date', ' $status')";

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
        header("Location: prod.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Brand Not Created";
        header("Location: prod.php");
        exit(0);
    }
    
}
