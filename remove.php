<?php

if($_SEVER['REQUEST_METHOD'] == 'POST')
{
    require('db.php');

    $stmt = $con->prepare("delete from cat_db where id=?");
    $stmt->bind_param("s", $category_id );

    $category_id = $_POST['category_id'];

    if($stmt->execute())
    {
        echo 1;
    }else
    {
        echo 0;
    }

    $stmt->close();
}