<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-sm-6 col-sm-3">

    <div class="form-group" align="left">
    
        <label>Brand</label>
        <select class="form-control" id="status" name="brand">
            <?php
                include('db.php');
                $brand = mysqli_query($con, "select * from brand");
                while($c = mysqli_fetch_array($brand)){

                
             ?>
            <option value="<?php echo $c['id'] ?>"> <?php echo $c['brandname']?></option>
            <?php } ?>
        </section>

    </div>
</div>
</body>
</html>