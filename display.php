<?php
require 'connection.php';
include 'delete.php' ;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dispaly data</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5" ><a class="text-light text-decoration-none" href="Form.php"> Add New User </a></button>
    <table class="table table-success table-striped">
    <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">job</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
      <tbody>
      <?php
$sql = "SELECT * FROM data_base ";
$result = mysqli_query ($conn,$sql);
if ($result){
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $job = $row['job'];
     echo "<tr>
      <th> $id </th>
      <td>$name</td>
      <td>$email</td>
      <td>$job</td>
      <td><buton class='btn btn-warning'><a href='form_update.php?updateid=$id'  class='text-light text-decoration-none'>update</a></buton>
      <buton class='btn btn-danger'><a href ='delete.php?deleteid=$id' class='text-light text-decoration-none'>delete</a></buton></td>

           </tr>";
    }
}

?>

</tbody>

</table>
    </div>
</body>
</html>