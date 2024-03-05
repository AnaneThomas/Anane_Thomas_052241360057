<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Faculty</title>
        <link rel="icon" href="pi.jpg" type="image/x-icon">
        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="faculty.cs">
        <link rel="stylesheet" href="pay.css">
    </head>
    <body>
        <div class="wrapper">
           <!-- <nav class="nav navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header" align="center">
                    <a class="navbar-brand" href="#">Faculty of applied science</a>
                </div>
            </div>
            </nav>  -->
            <div class="menu-bar">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Faculty of Applied Scince</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Faculty</a></li>

                    <li><a href="depart.php"><i class="fa fa-home"></i>Department</a></li>

                    <li class="active"><a href="#">Payment</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="Timetable.php">Time table</a></li>
                    
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>
            </nav>
            </div>
      
    
    <div class="container-fluid bg-2" align="center">
        <h2>Payment of Due</h2>

        <form action="" class="wrapper">
            <div class="form-group" align="left">
                <label class="form-lable">Student ID</label>
                <input type="text" name="studentname" id="studentname" class="form-control" placeholder="ID" required>
            </div>

            <div class="form-group" align="left">
                <label class="form-lable">First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
            </div>

            <div class="form-group" align="left">
                <label class="form-lable">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
            </div>

            <div class="form-group" align="left">
                <label class="form-lable">Amount</label>
                <input type="text" name="fee" class="form-control" placeholder="Amount" required>
            </div>

            <!--<div class="form-group" align="left">
                <label>Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Please Select">Please Select</option>
                    <option value="Active">Active</option>
                    <option value="DeActive">DeActive</option>
                </select>-->

                <div align="right" class="mt-">
                <button type="button" id="save" class="btn btn-info" onclick="addstudent()">Pay</button>
                <button type="button" id="clear" class="btn btn-warning" onclick="clear()">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
