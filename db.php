<?php

$con = mysqli_connect("localhost", "root", "", "jpos");
//$conn =new mysqli(hostname: $host, username: $username, password: $password, database:  $dbname);

if(!$con){
    die("Connection Failed" . mysqli_connect_error());
};

