<?php
session_start();
require('db.php');




if(isset($_POST['delete_purchase']))
{
    $purchase_id = mysqli_real_escape_string($con, $_POST['delete_purchase']); 

    $query = "DELETE FROM purchase WHERE id = '$purchase_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "";
        ?>
        <script>
            swal("Hello world!");
        </script>
        <?php
        header("Location: purchase.php");
        exit(0);
        
    }else{
        $_SESSION['message'] = "";
        header("Location: purchase.php");
        exit(0);
    }
}



// update edit in database


// put student info into database
if(isset($_POST['save_product']))
{
    $prod_id = mysqli_real_escape_string($con, $_POST['prod_id']);
    $productname = mysqli_real_escape_string($con, $_POST['product_name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    //$contact = mysqli_real_escape_string($con, $_POST['contact']);
    $qty = mysqli_real_escape_string($con, $_POST['qty']);
    $amount = mysqli_real_escape_string($con, $_POST['total']);

    
    $query = "INSERT INTO purchase(product_name, barcode, price, qty, amount) VALUES ('$productname', '$prod_id', '$price', '$qty', '$amount')";

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
        header("Location: purchase.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Vendor Not Created";
        header("Location: purchase.php");
        exit(0);
    }
    
}
