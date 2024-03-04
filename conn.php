<?php

$conn = mysqli_connect("localhost","root","","trialdb");


if(isset($_POST['submit'])){

    $name = $_POST['name'];

    $contact = $_POST['contact'];

    $message = $_POST['message'];


    $sql= "INSERT INTO users VALUES('','$name','$contact','$message')";

    mysqli_query($conn, $sql);


    echo"<script>alert('Data Submitted Successfully!')</script>";


    
}

else{
    echo"<script>alert('Data not Submitted Successfully!')</script>";
}

?>