<?php
include 'connection.php' ;
include 'fetch.php' ;
include 'update.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form </title>
</head>
<body>

<div class="row justify-content-center align-items-center h-100 ">
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
    <form  action="Form.php" method="POST">
        <div class="form-group"><br>
        <label>Name</label>
        <input type="text" name="name" class="form-control" value =<?php echo $name ; ?> placeholder="Enter Your Name"> 
        </div><br>
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value = <?php echo $email ; ?>  placeholder="Enter Your Email">
        </div><br>
        <div class="form-group">
        <label>Job </label>
        <input type="text" name="job" class="form-control" value = <?php echo $job ; ?>  placeholder="Enter Your Job">
        </div><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Update" />
    </form>
</div>
</div>
</body>
</html>