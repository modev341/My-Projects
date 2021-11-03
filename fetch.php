<?php
$id = $_GET['updateid'];
$sql = "select * from `data_base` where id=$id ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$job = $row['job'];
 ?>
