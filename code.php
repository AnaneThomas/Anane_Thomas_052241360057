<?php
session_start();
require('db.php');

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']); 

    $query = "DELETE FROM student WHERE id = '$student_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}


// update edit in database
if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']); 
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE student SET name='$name', email='$email', phone='$phone', course='$course' 
    WHERE id='$student_id'";

   $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: category.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Updated";
        header("Location: category.php");
        exit(0);
    }

}
// put student info into database
if(isset($_POST['save-student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    
    $query = "INSERT INTO student (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

    //$query = "INSERT INTO student (name, email, phone, course) VALUES (?,?,?,?)";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Create Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
    
}
