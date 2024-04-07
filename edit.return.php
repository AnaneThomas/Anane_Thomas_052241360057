<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require('db.php');

    $stmt = $con->prepare("select id, catname, status from cat_db where id=?");

    $catgory = $_POST['catgory_id'];
    $stmt->bind_param("s", $catgory );

    $stmt->bind_result($id, $catname, $status);

    
    if($stmt->execute()){
        while($stmt->fetch()){
            $output[] = array("id"=>$id, "catname"=>$catname, "status"=>$status);
        }

        echo json_encode($output);
    }

    $stmt->close();
}



